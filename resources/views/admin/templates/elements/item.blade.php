<div id="items" style="width: 100%;">
  <table>
    <tr>
      <td><label for="itemNum">Items Number:</label></td>
      <td>
        <select id="itemNum" class="form-control" style="background: whitesmoke;" onchange="changeNum()">
            <?php
            for($i=1;$i<=7;$i++){
                echo "<option value='".$i."'>".$i."<"."/option>";
            }
            ?>
        </select>
      </td>
    </tr>
    <tr>
      <td><label for="required">Img Url Required: </label></td>
      <td><input type="checkbox" id="itemsRequired" class="form-check-input" ></td>
      <td><label for="Content" style="margin-left: 5px">Content max length: </label></td>
      <td><input type="number" class="form-control" style="width: 70px" value="100" id="contentLength" ></td>
    </tr>
    <tr>
      <td><label>Item Format: </label></td>
      <td>
        <select id="itemFormat" class="form-control" style="background: whitesmoke">
          <option value="1">Format 1: Normal(300x600)</option>
          <option value="2">Format 2: Full items</option>
          <option value="3">Format 3: 160x600</option>
          <option value="4">Format 4: 1 image (140x600)</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label>Image Size:</label></td>
    {{--  <td><div id="imgSize" class="box" onresize="imgResize('imgSize')" style="max-width: 140px;max-height: 140px;min-width: 30px;min-height: 30px">Kéo để chọn size</div></td>--}}
      <td colspan="4">
        <span>W: </span>
        <input type="number" class="form-control" id="imgWidth" max="140" min="30" value="140" style="width: 70px;display: inline-block">
        <span> x H: </span>
        <input type="number" id="imgHeight" max="140" min="30" value="140" class="form-control" style="width: 70px;display: inline-block"> px
      </td>
    </tr>
  </table>
  <div id="items-list"></div>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
</div>

