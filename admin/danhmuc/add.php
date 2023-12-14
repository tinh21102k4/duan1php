<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 500px;
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
        form{
            margin-top: 20px;
            margin-left: 30px;
        }
        label{
            font-size: 21px;
        }
        .ip{
            width: 1000px;
            height: 40px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid black;
            color: black;
            transition: 1s ease;
        }
        ::placeholder{
            font-size: 21px;
            color: black;
        }
      .ip:hover,
      .ip:focus,
      .ip:active{
       border-bottom: purple;
      

      }
      .bt{
        width: 150px;
        height: 40px;
        background-color: aliceblue;
        border: none;
        border-radius: 3px;
        margin-left: 10px;
        margin-top: 20px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px;
        transition: all 1s;


        
      }
      

     .bt:hover{
        background-color: gray;
        color: black;
     }
     /* .container {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      } */
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: gray;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 12px 18px;
        cursor: pointer;
        border-radius: 5px;
        background-color: #8ebf42;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        transition: all 1s;
      }
      .button:hover{
        background-color: red;
      }
      
  
    </style>
    
    <div class='container'>
        <div class="text">THEM DANH MUC</div>
        <br> <br> 
       
        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
            
            <input type="text" name="id" placeholder="MA LOAI" class='ip'> <br> <br>
            <input type="text" name="name" placeholder="<?php if(isset( $_SESSION['err']['name'])){
              echo  $_SESSION['err']['name'];
            }else{
              echo 'TEN DANH MUC';
            } ?>" class='ip'> <br> <br>
           <?php unset( $_SESSION['err']);?>
            <input type="submit" value="THEM" name='themmoi' class='bt'> <input type="reset" value="NHAP LAI"  class='bt'> <a href="index.php?act=listsp"><input type="button" value='DANH SACH'  class='bt'></a>
        </form>
        </form>
  <?php if(isset($notify)): ?>
    <script>
    alert('<?php if(isset($notify)){
        echo $notify;
        echo 'By _ADMIN_';
    } ?>')
   </script>
   <?php endif ?>
</div>
