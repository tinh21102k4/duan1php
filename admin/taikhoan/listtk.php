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
        color: black;
      }
    </style>
    
    <div class='container'>
        <div class="text"></div>
         <div class="col">
            <table>
                <tr style="color:black;">
                    <th>CLICK</th>
                    <th>USER NAME</th>
                    <th>EMAIL</th>
                    <th>SO DIEN THOAI</th>
                    <th>PASSWORD</th>
                    <th>AVATAR</th>
                    <th>ADDRESS</th>
                    <th>PHÂN QUYỀN</th>
                    <th>THAO TÁC</th>

                </tr>
          
         </div>
         <div class="row">
           
        
         <?php if(isset($resulttk)):
                foreach($resulttk as $tk):
                
                ?>
                <tr style="color:black;">
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $tk['user'] ?></th>
                    <th><?php echo $tk['email'] ?></th>
                    <th><?php echo $tk['sdt'] ?></th>
                    <th><?php echo $tk['password'] ?></th>
                    <th>
                      <img src="../<?php echo $tk['img'] ?>" alt="" width="100px">
                    </th>
                    <th><?php echo $tk['address'] ?></th>
                    <th><?php echo $tk['role'] ?></th>
                    <th> <a href="index.php?act=deletetk&id=<?php echo $tk['id'] ?>"><button onclick="return confirm('BẠN MUỐN XÓA TÀI KHOẢN NÀY ?')">XÓA</button></a></th>
                     
                </tr>
                <?php endforeach ?>
            <?php endif  ?>
            </table>
          
         </div>
       
    </div>