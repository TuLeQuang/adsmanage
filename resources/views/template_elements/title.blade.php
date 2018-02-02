<div id="title">
  <table>
    <tr>
      <td><label>Title:</label></td>
      <td colspan="3"><input id="txtTitle" type="text" class="form-control" value="Title Demo" /></td>
    </tr>
    <tr>
      <td><label for="titleRequired">Required: </label></td>
      <td><input type="checkbox" id="titleRequired" class="form-check-input" style="margin-left: 10px"></td>
      <td><label for="titleLenght">Title max lenght: </label></td>
      <td><input type="number" class="form-control" style=" width:60px" value="40" id="titleLenght"></td>
    </tr>
    <tr>
      <td>Title color:</td>
      <td><input type="color" id="titleColor" value="#000000" name="titleColor"></td>
    </tr>
    <tr>
      <td>Font size:</td>
      <td class="range-slider">
        <input id="titleFontRange" class="input-range" type="range" min="10" max="50" step="1" value="10" style="width:100px;display: inline-block;" name="titleFont" />
        <input type="text" class="range-value" id="titleFontText" style="width:30px;"/><span>px</span>
      </td>
    </tr>
    <tr>
      <td>Backgroud color:</td>
      <td><input type="color" id="titleBgColor" value="#ffffff" name="titleBgColor"></td>
    </tr>
  </table>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('title')" style="margin: 15px 0px 0px 15px">Close</button>
</div>