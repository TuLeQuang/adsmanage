<div id="sponsors">
  <table>
    <tr>
      <td><label for="sponsorName">Sponsor:</label></td>
      <td><input type="text" class="form-control" id="sponsorName" value="dantri.com"></td>
    </tr>
    <tr>
      <td><label for="sponsorLength">Sponsor max length: </label></td>
      <td><input type="number" class="form-control" value="20" id="sponsorLength" ></td>
    </tr>
    <tr>
      <td><label>Color:</label></td>
      <td><input type="color" id="sponsorColor" value="#000000" name="sponsorColor"></td>
    </tr>
    <tr>
      <td>Font size:</td>
      <td class="range-slider">
        <input id="sponsorFontRange" class="input-range" type="range" min="10" max="50" step="1" value="10" style="width:100px;display: inline-block;" name="sponsorFont" />
        <input type="text" class="range-value" id="sponsorFontText" style="width:30px;"/><span>px</span>
      </td>
    </tr>
    {{--<tr>
      <td><label for="required">Logo Url Required: </label></td>
      <td><input type="checkbox" id="logoRequired" style="margin-left: 10px" ></td>
    </tr>
     <tr>
      <td><label for="logoImg">Logo Image:</label></td>
      <td><input type="url" class="item"></td>
    </tr>
    <tr>
      <td><label>Logo Size:</label></td>
      <td colspan="3"><div id="logoSize" class="box" style="max-height: 70px;max-width: 70px;font-size: 11px">Kéo để chọn size</div></td>
    </tr>--}}
  </table>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('sponsors')" style="margin: 15px 0px 0px 15px">Close</button>
</div>