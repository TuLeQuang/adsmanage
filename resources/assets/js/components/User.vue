<template>
    <div id="vue-wrapper">
       <!--nhap thong tin-->
      <!--  <div class="form-group row">
            <div class="col-md-8">
                <p class="text-center alert alert-danger" :class="{ hidden: hasError }">Nhập tên user</p>
                <input type="text" class="form-control" id="name" name="name"
                       v-model="newItem.name" placeholder="Nhập tên user" required>
                <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary" @click.prevent="createItem()" name="name">
                    <span class="glyphicon glyphicon-plus"></span> Nhập liệu
                </button>
            </div>
        </div>-->

        <!--hien thi du lieu-->
       <!-- <p class="text-center alert alert-success" :class="{ hidden: hasDeleted }">Xóa bản ghi thành công!</p>-->
        <div class="table table-borderless" >
            <table class="table table-borderless" >
                <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên user</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tr v-for="user in users">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user-list',
        data(){
            return {
                users:[]
            }
        },
        mounted(){
            axios.get('vueitems').then((response)=>this.users=response.data);
        }
    };
</script>