<div id="items" style="display: none;width: 100%">
  <table>
    <tr>
      <td><label for="itemNum">Items Number:</label></td>
      <td>
        <select id="itemNum" class="input-sm" style="background: whitesmoke;margin-left: 10px" onchange="changeNum()">
          <option selected="true" disabled="disabled" value="0">Chọn số lượng Items</option>
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
      <td><input type="checkbox" id="itemsRequired" style="margin-left: 10px" ></td>
      <td><label for="Content">Content max lenght: </label></td>
      <td><input type="number" style="width: 50px" value="100" id="contentLenght" ></td>
    </tr>
    <tr>
      <td><label>Image Size:</label></td>
      <td><div id="imgSize" class="box" style="max-width: 100px;max-height: 100px;min-width: 30px;min-height: 30px">Kéo để chọn size</div></td>
    </tr>
  </table>
  <div id="items-list"></div>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
</div>