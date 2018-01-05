<template>
    <div>
        <div v-for="tem in tems">
            {{tem.template}}

            <div id="script-text" style="display: block;padding-top: 200px">
                <button type="button" @click="exportScript()" class="btn btn-primary">layscript</button>
                Scrip:
                <p id ="script"></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'view-tem',
        data(){
            return {
                tems:[]
            }
        },
        methods:{
            exportScript: function () {
                var myJSON = JSON.stringify(tems.data);
                document.getElementById('script').innerHTML= myJSON;
            }
        },
        mounted(){
            axios.get('templates').then((response)=>this.tems=response.data);
        }
    };
</script>