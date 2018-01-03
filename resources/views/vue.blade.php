<!DOCTYPE html>

<html>
<head>
  <title>Ví dụ css đối với các html component về Vue.js - All Laravel</title>
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
</head>
<body>
<div id="content">
    <tem></tem>
    <user-list></user-list>
    {{--<view-tem></view-tem>--}}
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    /*Vue.component('my-component', {
        props: ['tem'],
        template: '<div> <h3>@{{tem.title}}</h3><img v-bind:src="tem.img.url" v-bind:style="tem.img.style"><span id="content">@{{ tem.content }}</span><br><a href="@{{ tem.url }}" style="text-decoration: none">@{{ tem.name }}</a> là website do <span v-bind:style="tem.style">@{{ tem.author }}</span> phát triển.</div>'
    });
    var tem ='<div><div id="my_view" style="float: left;width: 49%">\n' +
        '        <input type="text" v-model="name" placeholder="name"/><br>\n' +
        '        <input type="text" v-model="url" placeholder="url"/><br>\n' +
        '        <input type="text" v-model="author" placeholder="author"/><br>\n' +
        '        <input type="text" v-model="img.url" placeholder="img.url"/><br>\n' +
        '        <input type="text" v-model="img.style.width" placeholder="img.url.width"/><br>\n' +
        '        <input type="text" v-model="img.style.height" placeholder="img.url.height"/><br>\n' +
        '        <input type="text" v-model="content" placeholder="content"/><br>\n' +
        '        <input type="text" v-model="title" placeholder="title"/><br>\n' +
        '    </div>\n';
    var tem1='<div id ="demo" style="float: right;width: 49%">\n' + '<h3>@{{title}}</h3>\n' +
    '<img :src="img.url" :style="img.style"><span id="content">@{{ content }}</span><br>\n' +
    '<a :href="url" style="text-decoration: none">@{{ name }}</a> là website do <span :style="style">@{{ author }}</span> phát triển.</div></div>';
    var data = {
        title: "Ads title",
        name: "All Laravel",
        url: "https://soisodep.com",
        author: "neko",
        img:{
            url:"http://soisodep.com/images/bai2-1.jpg",
            style:{
                width:"150px",
                height:"150px"
            }
        },
        content:"Test conten1",
        style:{
            color: "yellow",
            'text-decoration': "none"
        }
    };

    var myViewModel = new Vue({
        el: '#content',
        data: function() {
            return data;
        },
        template: tem1,
        /!*methods:{
            exportScript: function () {
                var myJSON = JSON.stringify(data);
                document.getElementById('script').innerHTML= myJSON;
            }
        }*!/
    });*/

</script>
</body>
</html>
