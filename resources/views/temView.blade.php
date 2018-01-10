<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hien thi tem từ database</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">

</head>
<body>
    <div id="app">
    </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://vuejs.org/js/vue.js"></script>
  <script src="/templatemanager/node_modules/vee-validate/dist/vee-validate.js"></script>
  <script type="text/javascript">
      Vue.use(VeeValidate);
          <?php
          $tem_data= json_decode($temData,true);
          echo "var js_data = ".$tem_data['data'].";\n";
          echo "var js_template='".$temData['template']."';\n";
          ?>
    var tem_data=js_data;
    var div_script= '<div id="script-text" style="display: block;"><button type="button" @click="exportScript()" class="btn btn-primary">layscript</button>Scrip:<p id ="script"></p></div>';
    var vm = new Vue({
      el:'#app',
      data() {
         return tem_data;
      },
      template: "<div>"+js_template+div_script+"</div>",
      methods:{
        exportScript: function () {
          var myJSON = JSON.stringify(tem_data);
          document.getElementById('script').innerHTML= myJSON;
        },
          updateHtml: function(e) {
              this.title = e.target.innerHTML;
          },
      },

    });
  </script>
</body>
</html>