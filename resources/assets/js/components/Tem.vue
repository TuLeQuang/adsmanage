<template>
    <div>
        <div id="my_view" style="display: block;float: left;width: 49%">
            <span style="color: red" v-if="errors.any()">{{ errors.all().join("*  ")}}</span><br>
            <input type="text" placeholder="Name" name="name" v-model="name" v-validate="{required: true,max:30, min:2}"><br>
            <input type="text" v-model="url" /><br>
            <input type="text" v-model="author"/><br>
            <input type="text" v-model="img.url" placeholder="imgUrl" v-validate="{url: true,}"><br>
            <input type="text" v-model="img.style.width" /><br>
            <input type="text" v-model="img.style.height" /><br>
            <input type="text" v-model="content" /><br>
            <input type="text" v-model="title"/><br>
        </div>
        <div id ="demo" style="float: right;width: 49%">
            <h3>{{title}}</h3>
            <img v-bind:src="img.url" v-bind:style="img.style"><span id="content">{{content}} </span><br>
            <a :href="url" style="text-decoration: none">{{ name }}</a> là website do <span v-bind:style="style">{{ author }}</span> phát triển.
        </div>
        <div id="script-text" style="display: block;padding-top: 200px">
            <button type="button" :disabled="errors.any()" @click="exportScript()" class="btn btn-primary">layscript</button>
            Scrip:
            <p id ="script"></p>
        </div>
    </div>
</template>
<script>
    const data = {
        title: 'Ads title',
        name: 'All Laravel',
        url: 'https://soisodep.com',
        author: 'neko',
        img: {
            url: 'http://soisodep.com/images/bai2-1.jpg',
            style: {
                width: '150px',
                height: '150px',
            },
        },
        content: 'Test conten1',
        style: {
            color: 'yellow',
            'text-decoration': 'none',
        },
    };
    export default {
        name: 'Tem',
        data() {
            return data
        },
        methods:{
            exportScript: function () {
                var myJSON = JSON.stringify(data);
                document.getElementById('script').innerHTML= myJSON;
            }
        },
    };
</script>