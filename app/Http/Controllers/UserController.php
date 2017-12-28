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
    	$user=User::all();
    	return view('admin.user.user_list',['user'=>$user]);
    }

    public function getUser_Add()
    {
        
    	return view('admin.user.user_add');
    }
    public function postUser_Add(Request $request)
    {

    	$this->validate($request,
            [
                'name' => 'required|min:5',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:5|max:32',
                'passwordAgain'=>'required|same:password',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 5 kí tự',
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
    	$user->save();
    	return redirect('admin/user/user_add')->with('thongbao','Thêm tài khoản thành công');
    }

    public function getEdit($id)
    {
    	$user=User::find($id);
    	return view('admin.user.user_edit',['user'=>$user]);
    }

    public function postEdit(Request $request,$id)
    {
    	$this->validate($request,
            [
                'name' => 'required|min:5'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 5 kí tự'
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
    	return redirect('admin/user/user_edit/'.$id)->with('thongbao','Sửa thông tin thành công');
    }

    public function getDelete($id)
    {
    	$user=User::find($id);
    	$user->delete($id);
    	return redirect('admin/user/user_list')->with('thongbao','Xóa tài khoản thành công');
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

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('admin/user/user_list');
        }
        else
        {
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
