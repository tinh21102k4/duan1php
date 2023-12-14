
<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 500px auto;
            
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            padding-bottom: 20px;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
       table{
        margin-left: 5px;
       }
      th{
        width: 300px;
        height: 40px;
      }
      .tb{
        margin-left: 29px;
      }
      button{
        border: none;
        width: 50px;
        border-radius: 4px;
        transition: all 1s;
      }
      button:hover{
        background-color: gray;
        color: white;
      }
    </style>
    
    <div class='container'>
        <div class="text" style="color:black;">BINH LUAN</div>
         <div class="col">
            <table>
                <tr style="color:black;">
                    <th>CLICK</th>
                    <th>ID</th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>TÊN NGƯỜI BÌNH LUẬN</th>
                    <th>ID USER</th>
                    <th>IDSP</th>
                    <th>THAO TÁC</th>

                </tr>
           
         </div>
         <div class="row">
            <?php 
                $limit = 10;
                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }else{
                  $page = 1;
                }
                $start = ($page - 1) * $limit;
                   $listbinhluan = list_binhluan_admin($start,$limit);
                foreach($listbinhluan as $bl):
                
                ?>
      
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $bl['id'] ?></th>
                    <th><?php echo $bl['noidung'] ?></th>
                   <th> <?php echo $bl['ngaybinhluan'] ?></th>
                    <th><?php echo $bl['nameuser'] ?></th>
                  <th> <?php echo $bl['iduser'] ?></th>
                 
                    <th><?php echo $bl['idsp'] ?></th>
                   
                    <th> <a href="index.php?act=deletebl&id=<?php echo $bl['id'] ?>"><button onclick="return confirm('BẠN MUỐN XÓA BÌNH LUẬN NÀY ?')">XÓA</button></a></th>

                </tr>   <?php endforeach ?>
            </table>
           <div class="phantrang" style='margin: 20px 0 20px 300px;'>
            <?php
            $limit =10;
            $allrowbl = all_row_binhluan();
            foreach($allrowbl as $all){
              $all_page_bl = ceil($all[0]/$limit);
              for($i=1;$i<$all_page_bl;$i++){?>
            <span style='padding: 5px 10px 5px 10px;color:white; background-color:<?php if($_GET['page'] == $i){
              echo 'red';
            }else{
              echo 'black';
            } ?>; margin-left: 20px;'>
              <a href="index.php?act=listbl&page=<?php echo $i ?>"><?php echo $i ?></a>
            </span>
            <?php } ?>
            <?php } ?>
           </div>
         
         </div>
       
    </div>