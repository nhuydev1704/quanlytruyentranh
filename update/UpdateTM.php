<?php 
    require_once('../resoures/header.php');
    require_once('../resoures/dbhelp.php');
 
    $id ='';
    $tentruyen2  = $sochuong2 =$tentacgia2 = "";
       if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM TruyenMa WHERE id = '. $id;
        $roomList = executeResult($sql);
        if ($roomList != null && count($roomList) > 0) {
            $room = $roomList[0];
            $tentruyen2 = $room['TenTruyen'];
            $sochuong2 = $room['SoChuong'];
            $tentacgia2 = $room['TenTG'];
        } else {

        }
    }
 ?>
        <div class="body">
        	<div class="grid wide">
        		<div class="row">
        			<div class="c-3">
                         <?php 
                            require_once('../resoures/nav.php');
                          ?>
                    </div>
                    <div class="c-9">
                        <div class="container-title">
                            <i class="far fa-apple-alt" style="color: #FF9900;font-size: 4rem;margin-right: 7px;"></i>
                            <h1 style="color: #FF9900;">Cập Nhập Truyện Ma</h1>
                        </div>
                        <form style="background-color: #FF9900;" class="form" action="../php/TM.php" method="post" enctype="multipart/form-data">
                            <div class="row form-flex">
                                <div class="c-6">
                                    <div class="form__input">
                                        <label for="tentruyen">Tên Truyện:</label>
                                        <input class="input" type="text" id="tentruyen" name="tentruyen" value="<?=$tentruyen2?>">
                                    </div>
                                    <div class="form__input">
                                        <label id="label" for="anh">Trang bìa:</label>
                                        <input type="hidden" name="size" value="1000000"> 
                                        <input class="" type="file" id="anh" name="anh">
                                        <label for="anh">Tải Ảnh Lên</label>
                                        
                                    </div>
                                </div>
                                <div class="c-6">
                                    <div class="form__input">
                                        <label for="sochuong">Số Chương:</label>
                                        <input class="input" type="text" id="sochuong" name="sochuong" value="<?=$sochuong2?>">
                                    </div>
                                    <div class="form__input">
                                        <label for="tentacgia">Tên Tác Giả:</label>
                                         <select class="input" name="tentacgia" id="tentacgia">
                                                <option value="<?=$tentacgia?>"><?=$tentacgia?></option>
                                                <?php 
                                                        $sql = 'SELECT TenTG FROM TacGia';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['TenTG'].'>
                                                                    '.$epl['TenTG'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <button class="save-btn">Lưu</button>
                        </form>
                    </div>
        		</div>
            </div>
    	</div>
   
    </div>
    <script type="text/javascript" src="../main.js"></script>
</body>

</html>