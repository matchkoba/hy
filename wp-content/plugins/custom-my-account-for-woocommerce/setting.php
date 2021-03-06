<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( !empty( $_POST['submit'] ) && sanitize_text_field( $_POST['submit'] ) && current_user_can( 'manage_options' ) )
{
	
	$nonce_check = sanitize_text_field( $_POST['_wpnonce_custom_my_account'] );
	
	if ( ! wp_verify_nonce( $nonce_check, 'custom_my_account_setting' ) ) 
	{
		
		die(  __( 'Security check failed', 'custom-my-account' )  ); 
		
	}
	else 
	{
		
		if( !empty( $_POST['plugin_status'] ) )
		{
			
			$status = sanitize_text_field(  $_POST['plugin_status'] );
	
		}
		else
		{
			
			$status = '';
			
		}
		
		update_option('myaccount_plugin_setting',$status);
		
	}
	
}

$row = get_option('myaccount_plugin_setting');


?>

<div id="profile-page" class="wrap">

			<?php
			
				if( !empty( $_GET['tab'] ) )
				{
					
					$tab = sanitize_text_field( $_GET['tab'] );
					
				}
				else
				{
					$tab = '';
				}
				
			?>
			
			<h2>
			 Custom My Account Plugin Options
			</h2>
			<h2 class="nav-tab-wrapper woo-nav-tab-wrapper">
				<a class="nav-tab <?php if($tab == 'general' || $tab == ''){ echo esc_html( "nav-tab-active" ); } ?>" href="?page=phoe_myaccount_setting&amp;tab=general">General</a>
				<a class="nav-tab <?php if($tab == 'premium'){ echo esc_html( "nav-tab-active" ); } ?>" href="?page=phoe_myaccount_setting&amp;tab=premium">Premium</a>
				
			</h2>
		
		
		<?php
		if($tab=='general' || $tab=='')
		{
                
            $plugin_dir_url =  plugin_dir_url( __FILE__ );
            
			?>
            <style>
                #pho_wcpc_box.postbox h3{ padding: 0 0 0 10px;}
            </style>
            <div class="meta-box-sortables" id="normal-sortables">
				<div class="postbox " id="pho_wcpc_box">
					<h3><span class="upgrade-setting">Upgrade to the PREMIUM VERSION</span></h3>
					<div class="inside">
						<div class="pho_check_pin">

							<div class="column two">
								<!----<h2>Get access to Pro Features</h2>----->

								<p>Switch to the premium version of Custom My Account Plugin Options  to get the benefit of all features!</p>

									<div class="pho-upgrade-btn">
										<a target="_blank" href="http://www.phoeniixx.com/product/custom-my-account-for-woocommerce/"><img src="<?php echo $plugin_dir_url; ?>assets/img/premium-btn.png" /></a>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            

			<form method="post" action="">
			
				<?php $nonce = wp_create_nonce( 'custom_my_account_setting' ); ?>
							
				<input type="hidden" value="<?php echo $nonce; ?>" name="_wpnonce_custom_my_account" id="_wpnonce_custom_my_account" />

				<table class="form-table" style="background:#fff;">
				
					<tbody>
					
						<th style=" text-align:center;"> Enable</th>
						
						<td><input type="checkbox" name="plugin_status" <?php if($row=='enable'){ echo"checked"; }?>  value="enable" ><span class="description">Select checkbox as you want to plugin enable or disable</span></td>
					
					</tbody>
				
				</table>
				
				<p class="submit"><input type="submit" value="Save changes" class="button button-primary" id="submit" name="submit" /></p>
			
			</form>
		
			<?php
		}
		
		if($tab=='premium')
		{

			$plugin_dir_url =  plugin_dir_url( __FILE__ );
			
			?>
			
			<style>
			
				.premium-box{ width:100%; height:auto; background:#fff;  }
				.premium-features{}
				.premium-heading{  color: #484747;font-size: 40px;padding-top: 35px;text-align: center;text-transform: uppercase;}
				.premium-features li{ width:100%; float:left;  padding: 80px 0; margin: 0; }
				.premium-features li .detail{ width:50%; }
				.premium-features li .img-box{ width:50%; }

				.premium-features li:nth-child(odd) { background:#f4f4f9; }
				.premium-features li:nth-child(odd) .detail{float:right; text-align:left; }
				.premium-features li:nth-child(odd) .detail .inner-detail{}
				.premium-features li:nth-child(odd) .detail p{ }
				.premium-features li:nth-child(odd) .img-box{ float:left; text-align:right;}

				.premium-features li:nth-child(even){  }
				.premium-features li:nth-child(even) .detail{ float:left; text-align:right;}
				.premium-features li:nth-child(even) .detail .inner-detail{ margin-right: 46px;}
				.premium-features li:nth-child(even) .detail p{ float:right;} 
				.premium-features li:nth-child(even) .img-box{ float:right;}

				.premium-features .detail{}
				.premium-features .detail h2{ color: #484747;  font-size: 24px; font-weight: 700; padding: 0;}
				.premium-features .detail p{  color: #484747;  font-size: 13px;  max-width: 327px;}
				/**images**/
				.pincode-check{ background:url(<?php echo $plugin_dir_url; ?>assets/img/change-img.png); width:507px; height:200px; display:inline-block; margin-right: 25px; background-repeat:no-repeat; background-size:100%;}

				.sat-sun-off{ background:url(<?php echo $plugin_dir_url; ?>assets/img/tab.png); width:500px; height:161px; display:inline-block; background-size:500px auto; margin-right:30px; background-repeat:no-repeat;}

				.bulk-upload{ background:url(<?php echo $plugin_dir_url; ?>assets/img/style-options.png); width:440px; height:480px; display:inline-block; background-repeat:no-repeat;}

				.cod-verify{background:url(<?php echo $plugin_dir_url; ?>assets/img/menu-option.png); width:469px; height:385px; display:inline-block; margin-right:30px; background-repeat:no-repeat;}

				.delivery-date{background:url(<?php echo $plugin_dir_url; ?>assets/img/manage-menus.png); width:530px; height:280px; display:inline-block; background-repeat:no-repeat; background-size:100%;}

				.advance-styling{background:url(<?php echo $plugin_dir_url; ?>assets/img/delete-menu.png); width:530px; height:260px; display:inline-block; margin-right:30px; background-repeat:no-repeat; background-size:100%;}

				.Checkout-Page-Pincode--Check{background:url(<?php echo $plugin_dir_url; ?>assets/img/add-menu.png); width:530px; height:290px; display:inline-block; background-repeat:no-repeat; background-size:100%;}

				.deactivate-menu {background:url(<?php echo $plugin_dir_url; ?>assets/img/deactivate-menu.png); width:530px; height:250px; display:inline-block; margin-right:30px; background-repeat:no-repeat; background-size:100%;}

				.adding-shortcode {background:url(<?php echo $plugin_dir_url; ?>assets/img/short-codes.png); width:530px; height:415px; display:inline-block; margin-right:30px; background-repeat:no-repeat; background-size:100%;}

				/*upgrade css*/

				.upgrade{background:#f4f4f9;padding: 50px 0; width:100%; clear: both;}
				.upgrade .upgrade-box{ background-color: #808a97;
					color: #fff;
					margin: 0 auto;
				   min-height: 110px;
					position: relative;
					width: 60%;}

				.upgrade .upgrade-box p{ font-size: 15px;
					 padding: 19px 20px;
					text-align: center;}

				.upgrade .upgrade-box a{background: none repeat scroll 0 0 #6cab3d;
					border-color: #ff643f;
					color: #fff;
					display: inline-block;
					font-size: 17px;
					left: 50%;
					margin-left: -150px;
					outline: medium none;
					padding: 11px 6px;
					position: absolute;
					text-align: center;
					text-decoration: none;
					top: 36%;
					width: 277px;}

				.upgrade .upgrade-box a:hover{background: none repeat scroll 0 0 #72b93c;}

				.premium-vr{ text-transform:capitalize;} 
                .premium-box .pho-upgrade-btn{  text-align: center;}
                .pho-upgrade-btn > a{ display: inline-block; text-align: center; margin-top: 75px;}
                .premium-box-head {background: #eae8e7 none repeat scroll 0 0;height: 500px;text-align: center;width: 100%;}
                .pho-upgrade-btn a { display: inline-block; margin-top: 75px;}
                .main-heading {background: #fff none repeat scroll 0 0; margin-bottom: -70px;text-align: center;}
                .main-heading img {
    margin-top: -200px;
}
.premium-box-container {
    margin: 0 auto;
}
.premium-box-container .description:nth-child(2n+1) {
    background: #fff none repeat scroll 0 0;
}
.main-heading h1{ margin: 0px;}
.premium-box {
    background: none;
    height: auto;
    width: 100%;
}

.premium-box-container .description {
    display: block;
    padding: 35px 0;
    text-align: center;
}
.premium-box-container .pho-desc-head::after {
    background:url(<?php echo $plugin_dir_url; ?>assets/img/head-arrow.png) no-repeat;
    content: "";
    height: 98px;
    position: absolute;
    right: -40px;
    top: -6px;
    width: 69px;
}
.premium-box-container .pho-desc-head {
    margin: 0 auto;
    position: relative;
    width: 768px;
}
.pho-plugin-content {
    margin: 0 auto;
    overflow: hidden;
    width: 768px;
}
.pho-plugin-content img {
    max-width: 100%;
    width: auto;
}

.premium-box-container .pho-desc-head h2 {
    color: #02c277;
    font-size: 28px;
    font-weight: bolder;
    margin: 0;
    text-transform: capitalize;
}
.pho-plugin-content p {
    color: #212121;
    font-size: 18px;
    line-height: 32px;
}
.premium-box-container .description:nth-child(2n+1) .pho-img-bg {
    background: #f1f1f1 url(<?php echo $plugin_dir_url; ?>assets/img/image-frame-odd.png) no-repeat 100% top;
}
.description .pho-plugin-content .pho-img-bg {
    border-radius: 5px 5px 0 0;
    height: auto;
    margin: 0 auto;
    padding: 70px 0 40px;
    width: 750px;
}
.premium-box-container .description:nth-child(2n) {
    background: #eae8e7 none repeat scroll 0 0;
}
.premium-box-container .description:nth-child(2n) .pho-img-bg {
    background: #f1f1f1 url(<?php echo $plugin_dir_url; ?>assets/img/image-frame-even.png) no-repeat 100% top;
}
.premium-box-container .description:nth-child(2n+1) .pho-img-bg {
    background: #f1f1f1 url(<?php echo $plugin_dir_url; ?>assets/img/image-frame-odd.png") no-repeat scroll 100% top;
}
			</style>

			<div class="premium-box">

			<div class="premium-box-head">
           <div class="pho-upgrade-btn">
           <a target="_blank" href="http://www.phoeniixx.com/product/custom-my-account-for-woocommerce/"><img src="<?php echo $plugin_dir_url; ?>assets/img/premium-btn.png" /></a>
           </div>
           </div>
           
           <div class="main-heading">
           <h1> <img src="<?php echo $plugin_dir_url; ?>assets/img/premium-head.png" />
           
          </h1>
           </div>
           <div class="premium-box-container">
           <div class="description">
                <div class="pho-desc-head">
                <h2>Allow Users to Upload Profile Picture</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>This feature of the plugin lets your users add a profile picture of their own choice, instead of keeping the default avatar as their profile image.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/change-img.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Display Menu Options as ‘Side Bar’ or as ‘Tab’</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>You could display the menu options either as Side Bars appearing on left side of the page, or you could display the menu options as multiple consecutive tabs.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/tab.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Explore Various Styling Options</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>
				   The plugin lets you style the Menu options as per your need. You could set :- 
				a.) Menu Item Color
				b.) Menu Item Color on Hover
				c.) Logout Color
				d.) Logout Color on Hover 
				e.) Logout Background Color
				f.) Logout Background Color on Hover, as per your requirements.


				</p>
                        <div class="pho-img-bg">
                       <img src="<?php echo $plugin_dir_url; ?>assets/img/style-options.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Sort the Menu Options</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>This feature lets you rearrange the menu options as and when you want to. Based on your priority, you could easily sequence the menu options in the backend.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/menu-option.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Edit the Menu Options</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>This feature lets you edit various features of a menu option. The list of editable features includes- ‘Label’, ‘Icon’ & ‘Custom Content’ written under that particular menu option.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/manage-menus.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Delete Any of the Menu Options</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>If at any point in time, you, surely want to permanently delete a particular Menu Option from the list of options, then you could easily do that at the backend. However, if you want to temporarily deactivate a menu option, then there is a separate option for that.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/delete-menu.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Add as many Menu Options as You Want</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>The plugin lets you add as many Menu Options as you want to. There is no limit to the number of options you could add to the list.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/add-menu.png" />
                        </div>
                    </div>
            </div>
            <div class="description">
                <div class="pho-desc-head">
                <h2>Temporarily Deactivate One or More Menu Options</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>If in case, there is a Menu Option that you want to hide for some time, then you could easily do that by temporarily deactivating the feature, at the backend.</p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/deactivate-menu.png" />
                        </div>
                    </div>
            </div>
             <div class="description">
                <div class="pho-desc-head">
                <h2>Adding Shortcodes</h2></div>
                
                    <div class="pho-plugin-content">
                        <p>The plugin supports shortcode, and so you can easily add any shortcodes in My Account area.For eg :- Contact form 7  </p>
                        <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>assets/img/short-codes.png" />
                        </div>
                    </div>
            </div>
           </div>
           
           <div class="pho-upgrade-btn">
        <a target="_blank" href="http://www.phoeniixx.com/product/custom-my-account-for-woocommerce/"><img src="<?php echo $plugin_dir_url; ?>assets/img/premium-btn.png" /></a>
        </div>
		

			
			</div></div>
			<?php
			
		}
		
	?>