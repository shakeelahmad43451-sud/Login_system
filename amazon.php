<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: ../myproject/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Amazon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
     
</head>
<body>
     <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
                </div>

                  <div class="nav-address border">
                    <p class="Deliver"><a href="https://www.amazon.com/"> Deliver to</a></p>
                    <div class="addre-icon">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="India"><a href="https://www.amazon.com/">India</a></p>
                    </div>
                  </div>

                  <div class="main-bar">
                    <select class="all ">
                        <option> All</option>
                        <option>barilly</option>
                         </select>
                        <input type="text" id="searchinput" placeholder="Search Amazon" onkeyup="let w=this.value.toLowerCase(); document.querySelectorAll('.box').forEach(b=>{b.style.display=b.innerText.toLowerCase().includes(w)?'':'none'})">
                        <div class="search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                  </div>
 
<div class="hello border">
     <p class="name"><a href="../myproject/logout.php" style="color:white; text-decoration:none;">Hello, User</a></p>
     <b class="shakeel"><a href="../myproject/logout.php" style="color:white; text-decoration:none;">Logout</a></b>
   </div> 
                  <div class="order border">
                    <p class="return"><a href="https://www.amazon.com/gp/css/order-history?ref_=nav_orders_first">  Return</a></p>
                    <p class="order"> <a href="https://www.amazon.com/gp/css/order-history?ref_=nav_orders_first">& Orders</a></p>
                  </div>

                  <div class="header border">
                    <p class="asad"> <i class="fa-solid fa-cart-shopping"></i></p>
                    <b class="cart-text"> <a href="https://www.amazon.com/gp/cart/view.html?ref_=nav_cart"> Cart </a></b>
                  </div>
                  </div>

</div>
</div>

            </div>
        </div> 
      

     <!-- secound part -->
<div class="container b"> 
<div class="panel border"> 

    
   <p class="alls"> <i class="fa-solid fa-bars"></i><a href="javascript: void(0)"> All </a></p>    
</div>

<div class="today border">
   <a href="https://www.amazon.com/gp/goldbox?ref_=nav_cs_gb">  Today's Deals </a>
</div>
<div class="prime border">
   <a href="https://www.amazon.com/Amazon-Video/b/?ie=UTF8&node=2858778011&ref_=nav_cs_prime_video">  Prime Video</a>
</div>
<div class="ragistory border">
   <a href="https://www.amazon.com/gp/browse.html?node=16115931011&ref_=nav_cs_registry"> registry </a>
</div>
<div class="git-cards border">
   <a href="https://www.amazon.com/gift-cards/b/?ie=UTF8&node=2238192011&ref_=nav_cs_gc">  Gift Cards </a>
</div>
<div class="customer border">
  <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=508510&ref_=nav_cs_customerservice">   Customer Service </a>
</div>
<div class="sell border">
   <a href="https://www.amazon.com/b/?_encoding=UTF8&ld=AZUSSOA-sell&node=12766669011&ref_=nav_cs_sell">  Sell </a>
</div>
</div>
<div class="cloan">

</div>
</header>

<!-- herosection -->

<div class="hero-section">
     <div class="hero-msg" style="color: black;">You are on amazon.com. You can also shop on Amazon India for millions of products with fast local delivery.<a href="https://www.amazon.com/r/?_encoding=UTF8&aid=Jb1bh6HBRX-p7CkTgHfWPg&dest=https%3A%2F%2Fwww.amazon.in%3Fref%3Daisgw_intl_stripe_in&pd_rd_w=v1qIV&content-id=amzn1.sym.5d022dd3-7374-4c36-972c-d2f317605745&pf_rd_p=5d022dd3-7374-4c36-972c-d2f317605745&pf_rd_r=8VX3XQ29MFTYB5S97PDF&pd_rd_wg=bSGeF&pd_rd_r=0992aeeb-4878-45b0-8c1d-5f5e6b7a2b0b&ref_=pd_hp_d_atf_unk" style="color:blue;">  Click here to go to amazon.in</a> </div>
   </div> 
    
 <div class="shop-section"> 
        <div class="mohd-asad">
           
            <div class="box-contant">
                  <h2> Get your game on</h2>
           <a href="https://www.amazon.com/s/?_encoding=UTF8&k=gaming&pd_rd_w=oSy0X&content-id=amzn1.sym.edf433e2-b6d4-408e-986d-75239a5ced10&pf_rd_p=edf433e2-b6d4-408e-986d-75239a5ced10&pf_rd_r=8VX3XQ29MFTYB5S97PDF&pd_rd_wg=bSGeF&pd_rd_r=0992aeeb-4878-45b0-8c1d-5f5e6b7a2b0b&ref_=pd_hp_d_atf_unk">  <div class="box-img" style="background-image: url('box1.jpg');"></div> </a>

            <p><a href="https://www.Amazon.com" style="color: blue;">see more</a></p>
            </div>
        </div>
        <div class="mohd-asad ">
             <h2> Level up your PC here</h2>
            <a href="https://www.amazon.com/Lenovo-Legion-AI-Powered-Gaming-Laptop/dp/B0FY77GFRN/?_encoding=UTF8&pd_rd_w=e1IHh&content-id=amzn1.sym.567e5c5f-48c8-48b3-aff4-1448a2e1facc%3Aamzn1.symc.050ea944-f1cf-4610-b462-3b604f2f4082&pf_rd_p=567e5c5f-48c8-48b3-aff4-1448a2e1facc&pf_rd_r=41A7WHR4F60CH1XKZNM6&pd_rd_wg=lChYq&pd_rd_r=27eef1e6-478c-466c-903d-b07722002966&ref_=pd_hp_d_btf_ci_mcx_mr_ca_id_hp_d"> <div class="box-img" style="background-image: url('box2.jpg');"></div> </a>
            <p><a href="https://www.Amazon.com" style="color: blue;">see more</a></p>
        </div>
        <div class="mohd-asad ">
             <h2> Top categories in Kitchen appliances</h2>
            <a href="https://www.amazon.com/s/?_encoding=UTF8&k=cooker&pd_rd_w=iJVhT&content-id=amzn1.sym.8158743a-e3ec-4239-b3a8-31bfee7d4a15&pf_rd_p=8158743a-e3ec-4239-b3a8-31bfee7d4a15&pf_rd_r=41A7WHR4F60CH1XKZNM6&pd_rd_wg=GqFJi&pd_rd_r=18b6902e-bc96-47bb-9e50-2f07b4ef042e&ref_=pd_hp_d_atf_unk">  <div class="box-img" style="background-image: url('box3.jpg');"></div>
            <p><a href="https://www.Amazon.com" style="color: blue;">see more</a> </p>
        </div>
        <div class="mohd-asad ">
             <h2> Shop for your home essentials</h2>
           <a href="https://www.amazon.com/s/?_encoding=UTF8&k=Dresses&crid=1PW0S93CC85GY&sprefix=dresses%2Caps%2C146&ref=nb_sb_noss_1&pd_rd_w=Z8N4g&content-id=amzn1.sym.bc6e892c-a9fc-4672-99a1-592a1c3e66ca&pf_rd_p=bc6e892c-a9fc-4672-99a1-592a1c3e66ca&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=ZISJN&pd_rd_r=3eb5b288-a21f-47b7-8ca1-1fb2fd61e083&ref_=pd_hp_d_atf_unk">  <div class="box-img" style="background-image: url('box4.jpg');"></div></a>
            <p><a href="https://www.Amazon.com" style="color: blue;">see more</a> </p>           
        </div>

        <div class="mohd-asad ">
           
            <div class="box-contant">
                 <h2> Wireless Tech</h2>
           <a href="https://www.amazon.com/Casio-MRW200H-1BV-Black-Resin-Watch/dp/B005JVP0LE/?_encoding=UTF8&pd_rd_w=H7eNg&content-id=amzn1.sym.e85ee24d-ce5e-479d-bdb3-28d6161095d7&pf_rd_p=e85ee24d-ce5e-479d-bdb3-28d6161095d7&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_exports-popular-this-season-with-similar-asins">  <div class="box-img" style="background-image: url('box5.jpg');"></div></a>
            <p><a href="https://www.Amazon.com" style="color: blue;"> see more</a> </p>
            </div>
        </div>
        <div class="mohd-asad ">
             <h2> Wireless Tech</h2>
            <a href="https://www.amazon.com/Casio-MRW200H-1BV-Black-Resin-Watch/dp/B005JVP0LE/?_encoding=UTF8&pd_rd_w=H7eNg&content-id=amzn1.sym.e85ee24d-ce5e-479d-bdb3-28d6161095d7&pf_rd_p=e85ee24d-ce5e-479d-bdb3-28d6161095d7&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_exports-popular-this-season-with-similar-asins"><div class="box-img" style="background-image: url('box6.jpg');"></div></a>
            <p><a href="https://www.Amazon.com" style="color: blue;"> see more </a> </p>
        </div>
        <div class="mohd-asad ">
             <h2>cover</h2>
           <a href="https://www.amazon.com/Compatible-Rotatable-Shockproof-Anti-fall-Protective/dp/B0F98RFKJ4/ref=sr_1_8?crid=QMPYPLBS8CST&dib=eyJ2IjoiMSJ9.FmIxcxxCl1ea4lHQal7vUQOggdOPFdB7dDHzT6hG27Uv24zJZsOnZmVE2wBkyzh6i2RIZUjbZpJTOsVbFsLrLHgeRKCEpiTrw-E5QieuBP8HBwILkPufmPaeE7hmMfr4Aqt6tvHYBnM1IweXpXVmAfibxEzqFPzrELBfZIrQ_W5wuYzBCG-UKwKemd-wq_zVQKML3nUA8GNkCCI72HZy35akRIvxUcfeCIZtj1gyVk0.GInffuue89BkBwupDQp0OkyZGKB625oYGSsfLR1ToaE&dib_tag=se&keywords=smart+5+infinix+back+cover&qid=1778209865&sprefix=smart+5+infinix+back+cove%2Caps%2C555&sr=8-8">  <div class="box-img" style="background-image: url('box7.jpg');"></div></a>
            <p><a href="https://www.Amazon.com" style="color: blue;"> see more </a> </p>
        </div>
        <div class="mohd-asad ">
             <h2>Wireless Tech</h2>
           <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MTo3NjMxNTY2MTcwNzY2Njk4OjE3NzgyMDk2NTY6c3BfYnRmOjMwMDE4MzgxNjEzNDMwMjo6MDo6&url=%2FKHUYTOR-I24-Ultra-Smartphone-Unlocked%2Fdp%2FB0F3LFCNN5%2Fref%3Dsr_1_22_sspa%3Fcrid%3D27W1VXMDFFARR%26dib%3DeyJ2IjoiMSJ9.0NQAaFtVxD2FMS7FR6F6hV09VNLgrrhRrp2ZYjuo0cKAi8zLJ61_fGmz72_adcrH7-f4Yk4rZP3hXA_PmPXZTezJRMR8-YQM9itU5bxy3Wm-cJ9JR_YijPJwxLA5dpZv0oMEEhq9CKltQKgBTOfbSzTPAQfofDJg7fAhNhaYNloPrzKyoCeNMwv7H7ewjenMHc27i5SQoao3TWc5NjOcSguAZf7tEVAGjmzDUbY2-pI.I6blkWkCck8biIdZsGB4P4rE4NZzi-Icr9P8PzLD1sU%26dib_tag%3Dse%26keywords%3Dsmart%2Bphone%26qid%3D1778209656%26sprefix%3Dsmart%2Bphone%252Caps%252C560%26sr%3D8-22-spons%26sp_csd%3Dd2lkZ2V0TmFtZT1zcF9idGY%26psc%3D1"> <div class="box-img" style="background-image: url('box8.jpg');"></div></a>
            <p><a href="https://www.Amazon.com" style="color: blue;">see more </a> </p>           
        </div>

       <!-- four-boxex -->
<a href="https://www.amazon.com/s/?_encoding=UTF8&k=pc%20gaming&pd_rd_w=5HNXd&content-id=amzn1.sym.f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_p=f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_unk"> <div class="four-box-main-container"> 
      <div class="four-container"> 
        <div class="box1"></div>
        laptop
        <div class="box2"></div>
        CPU
        <div class="box3"></div>
        game remote
        <div class="box4"></div>
        t sirt 
        
       </div> </a>
       <a href="https://www.amazon.com/s/?_encoding=UTF8&k=pc%20gaming&pd_rd_w=5HNXd&content-id=amzn1.sym.f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_p=f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_unk">
        <div class="four-container"> 
        <div class="box1"></div>
        laptop
        <div class="box2"></div>
        CPU
        <div class="box3"></div>
        game remote
        <div class="box4"></div>
        t sirt 
        
       </div></a>
       <a href="https://www.amazon.com/s/?_encoding=UTF8&k=pc%20gaming&pd_rd_w=5HNXd&content-id=amzn1.sym.f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_p=f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_unk"> 
        <div class="four-container"> 
        <div class="box1"></div>
        laptop
        <div class="box2"></div>
        CPU
        <div class="box3"></div>
        game remote
        <div class="box4"></div>
        t sirt 
        
       </div></a>
       
        <a href="https://www.amazon.com/s/?_encoding=UTF8&k=pc%20gaming&pd_rd_w=5HNXd&content-id=amzn1.sym.f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_p=f4dce7c3-dfcf-41bb-8922-50be98bf1e86&pf_rd_r=J8ZFQ3558QVD5SDKCJ3C&pd_rd_wg=xMNWO&pd_rd_r=92dcd690-e596-4a9d-90fd-0d5db1a9a725&ref_=pd_hp_d_btf_unk"> <div class="four-container"> 
        <div class="box1"></div>
        laptop
        <div class="box2"></div>
        CPU
        <div class="box3"></div>
        game remote
        <div class="box4"></div>
        t sirt 
        
       </div>  </a>
       </div>
       <div class="screencontainer">
        <div class="display"></div>
       </div>
 
        <!-- .screen-short.2 -->
         <div class="screen-short2-container">
            <div class="part2"></div>
         </div>

    


         <div class="next-container">
            <div class="next"></div> 
         </div>

         <!-- theoury -->

         <div class="theury-container">
             
            <div class="theury01">
                <h2>See personalied recomendation </h2>
              <button><b> <a href="https://www.amazon.com/ap/signin?openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fref%3Drhf_sign_in&openid.assoc_handle=usflex&openid.pape.max_auth_age=0" style="color: blue;"> Sign in </a></b></button> 
               <p class="new-customer"><b>New customer? </b><a href="" style="color: blue;"><b> Start here</b></a> </p>
            </div>
         </div>
        
         <div class="backtotop">
            <p class="back">Back to top</p>
         </div>
             

</body> 
<script>
let search = document.getElementById('searchinput');
search.addEventListener('keyup', function(){
  let word = this.value.toLowerCase();
  document.querySelectorAll('.card, .box').forEach(function(product){
    product.style.display = product.innerText.toLowerCase().includes(word) ? '' : 'none';
  });
});
</script>
</html> 
