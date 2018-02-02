<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function getUser_List()
    {
    	if(Auth::user()->level==1)
        {
            $user=User::all();
            return view('admin.user.user_list',['user'=>$user]);
        }
        
    }
    public function getListMember($id)
    {
        $us=User::find($id);
        return view('admin.user.user_list_member',['us'=>$us]);
    }

    public function getUser_Add()
    {
        if(Auth::user()->level!=1)
            return redirect('admin/user/user_list')->with('error','Bạn không được quyền thêm tài khoản');
    	return view('admin.user.user_add');
    }
    public function postUser_Add(Request $request)
    {

    	$this->validate($request,
            [
                'name' => 'required|min:5|unique:users,name',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:5|max:32',
                'passwordAgain'=>'required|same:password',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 5 kí tự',
                'name.unique'=>'Tên người dùng đã tồn tại hãy chọn tên khác',
                'email.required'=>'Bạn chưa nhập địa chỉ email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email bạn vừa nhập đã tồn tại',
                'password.required'=>'Bạn chưa điền mật khẩu',
                'password.min'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
                'password.max'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',      
            ]);
    	$user=new User();
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=bcrypt($request->password);
    	$user->level=$request->level;
        $user->active  = 1;
    	$user->save();
    	return redirect('admin/user/user_list')->with('success','Thêm tài khoản thành công');
    }

    public function getEdit($id)
    {   
        $user=User::find($id);
        if(Auth::user()->level==1 && Auth::user()->level!=1 && ($user['level'] == 1 || ($user['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $user['level']==1 &&(Auth::user()->id!=$id)))
        {
            return redirect('admin/user/user_list')->with('error','Bạn không được sửa tài khoản admin khác');
        }
    	return view('admin.user.user_edit',['user'=>$user]);
    }

    public function postEdit(Request $request,$id)
    {
    	$this->validate($request,
            [
                'name' => 'required|min:5|unique:users,name',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 5 kí tự',
                'name.unique'=>'Tên người dùng đã tồn tại hãy chọn tên khác',
            ]);
    	$user=User::find($id);
    	$user->name=$request->name;
    	$user->level=$request->level;
    	if($request->changePassword == "on")
    	{
    		$this->validate($request,
            [
                'password'=>'required|min:5|max:32',
                'passwordAgain'=>'required|same:password',
            ],
            [
                'password.required'=>'Bạn chưa điền mật khẩu',
                'password.min'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
                'password.max'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',
                
            ]);
    		$user->password=bcrypt($request->password);
    	}
    	$user->save();
    	return redirect('admin/user/user_edit/'.$id)->with('success','Sửa thông tin thành công');
    }
    
    public function getActive(Request $request,$id)
    {
        $user=User::find($id);
        if(Auth::user()->level==1 && Auth::user()->level!=1 && ($user['level'] == 1 || ($user['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $user['level']==1 &&(Auth::user()->id!=$id) || (Auth::user()->id==$id)))
        {
            return redirect('admin/user/user_list')->with('error','Bạn không được thay đổi trang thái hoạt động này');
        }
        if($user->active==1)
            {$user->active=0;}
        else
            $user->active=1;
        $user->save();
        return redirect('admin/user/user_list');
    }
    public function getDelete($id)
    {
    	$delete=User::find($id);
    	if(Auth::user()->level!=1 && ($delete['level'] == 1 || ($delete['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $delete['level']==1 &&(Auth::user()->id!=$id) || (Auth::user()->id==$id)))
        {
            return redirect('admin/user/user_list')->with('error','Bạn không được quyền xóa tài khoản');
        }
        $delete->delete($id);
    	return redirect('admin/user/user_list')->with('success','Xóa tài khoản thành công');
    }

    public function getLogin()
    {
    	return view('admin.layout.login');
    }
    public function postLogin(Request $request)
    {
    	$this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:5|max:32',
            ],
            [
                'email.required'=>'Bạn chưa nhập địa chỉ email',
                'password.required'=>'Bạn chưa điền mật khẩu',
                'password.min'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
                'password.max'=>'Mật khẩu phải có độ dài ít nhất từ 5 đến 32 kí tự',
            ]);
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'active' => $request->active=1]))
        {
            if (Auth::user()->level!=1) 
            {   
                return redirect('admin/template');
            }
            return redirect('admin/user/user_list');
        }
        else
        {
            return redirect('admin/login')->with('error','Email hoặc Password không đúng');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
