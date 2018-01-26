<div id="items" style="display: none;width: 100%">
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
      <td><label for="Content" style="margin-left: 5px">Content max lenght: </label></td>
      <td><input type="number" class="form-control" style="width: 70px" value="100" id="contentLenght" ></td>
    </tr>
    <tr>
      <td><label style="margin-left: 5px">Item Format: </label></td>
      <td>
        <select id="itemFormat" class="form-control" style="background: whitesmoke">
          <option value="1">Format 1: Normal(300x600)</option>
          <option value="2">Format 2: Full items</option>
          <option value="3">Format 3: width 160x600</option>
          <option value="4">Format 4: width 140 - 1 image</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label>Image Size:</label></td>
      <td><div id="imgSize" class="box" style="max-width: 140px;max-height: 140px;min-width: 30px;min-height: 30px">Kéo để chọn size</div></td>
    </tr>
  </table>
  <div id="items-list"></div>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
</div>

