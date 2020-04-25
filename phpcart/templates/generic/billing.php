<script language="JavaScript">

<!--
function updateShipping(){

		form=document.getElementById('billingform');
	
		form.target='_self';
		form.action='phpcart.php';
		document.billingform.action.value = 'checkout';
		document.billingform.updateshipping.value='Y';
		document.billingform.sstate.value = document.billingform.state.value;
		document.billingform.scountry.value = document.billingform.country.value;
		
	form.submit();
}


//-->

</script> 

<link href="../styles/stylesheet.css" rel="stylesheet" type="text/css">

	<form action="phpcart.php" method="post" name="billingform" id="billingform">
	<input type="hidden" name="action" value="confirm">
	<input type="hidden" name="shippingsame" value="Y">
    <input type="hidden" name="sstate" value="">
    <input type="hidden" name="scountry" value="">
    <input type="hidden" name="updateshipping" id="updateshipping" value="">

		<table width="100%" class="infobox" cellpadding="3" align="center">

            <!-- BEGIN VALIDATION -->

			<tr>

				<td colspan="2" class="error"><div align="left"><strong>The following fields must be filled out:</strong><br>

				%%VALIDATION%%</div></td>

			</tr>

            <!-- END VALIDATION -->

			<tr>

				<td colspan="2" class="message"><div align="center"><strong>Please verify your order.</strong><br> 

				Complete the form below and click on the button below to complete this order. </div></td>

			</tr>

			<tr>

				<th colspan="2" class="message">

					<b>Note:</b> You will be taken to our Secure 128 Bit Payment Gateway Server.</th>

			</tr>

			<tr>

				<td align="right" class="text">First Name</td>

				<td><div align="left">

					<input name="firstname" type="text" class="username" value="%%FIRSTNAME%%" size="40">

			        %%FIRSTNAMEREQUIRED%%

</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Last Name</td>

				<td><div align="left">

					<input name="lastname" type="text" class="username" value="%%LASTNAME%%" size="40">

			        %%LASTNAMEREQUIRED%%

</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Email Address</td>

				<td><div align="left">

					<input name="email" type="text" class="username" value="%%EMAIL%%" size=40>

			        %%EMAILREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Company</td>

				<td><div align="left">

					

					<input name="company" type="text" class="username" value="%%COMPANY%%" size=40></div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Address</td>

				<td><div align="left">

					

					<input name="address" type="text" class="username" value="%%ADDRESS%%" size="40">

		        %%ADDRESSREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Address Line 2</td>

				<td><div align="left">

					

					<input name="address2" type="text" class="username" value="%%ADDRESS2%%" size="40">

		        </div></td>

			</tr>

			<tr>

				<td align="right" class="text">City</td>

				<td><div align="left">

					

					<input name="city" type="text" class="username" value="%%CITY%%" size="12">

		        %%CITYREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">State</td>

				<td><div align="left">

					

					<select name="state" size="1" class="username" onchange="updateShipping()">

						<option value="">Choose a State</option>

							

							

					%%STATES%%

					

					</select>

		        %%STATEREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">State Other</td>

				<td><div align="left">

					

					<input name="stateother" type="text" class="username" value="%%STATEOTHER%%" size="15" maxlength="30">

		        </div></td>

			</tr>

			<tr>

				<td align="right" class="text">Zip Code</td>

				<td>

					<div align="left">

						

						<input name="zip" type="text" class="username" value="%%ZIP%%" size="12" maxlength="10">

   	            %%ZIPREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Country</td>

				<td><div align="left">

					

					<select name="country" size="1" class="username" onchange="updateShipping()">

                    	<option value="">Choose a Country</option>

                    	

							

							

					%%COUNTRIES%%

					

					

					</select>

		        %%COUNTRYREQUIRED%%</div>

				</td>

			</tr>

			<tr>

				<td align="right" class="text">Phone</td>

				<td><div align="left">

					

					<input name="phone" type="text" class="username" value="%%PHONE%%" size="14">

		        %%PHONEREQUIRED%%</div>

				</td>

			</tr>

			<!-- BEGIN COMMENTS -->

			<tr>

				<td align="right" class="text">Comments</td>

				<td><div align="left">

					<textarea name="comments" cols="50" rows="3" class="username">%%COMMENTS%%</textarea>

		        </div></td>

			</tr>

			<!-- END COMMENTS -->

			<tr>

				<td align="right" class="text">Payment Method </td>

				<td><div align="left">

					<select name="paymentmethod" size="1" class="username"  onchange="showDiv(this.value);">

						<option value="">Select Payment Method</option>

						%%PAYMENTMETHODS%%

					</select>

		        </div>

				</td>

			</tr>

			<!-- BEGIN CREDITCARD -->

			<tr>
            	<td colspan="2" align="center">

				<table align="center" id="manual" class="hiddenDiv" width="100%">
                <tr>
					<td colspan="2" align="left"><strong>If you are paying via credit card please fill out the fields below</strong></td>
				</tr>

				<tr>

                    <td align="right" class="text">Card Type : </td>
    
                    <td align="left"><select name="cctype">
    
                    <option value="">Select Credit Card Type</option>
    
                    %%CCTYPES%%
    
                    </select>
    
                        %%CCTYPEREQUIRED%%
    
                    </td>

			</tr>

			<tr>

				<td align="right" class="text">Credit Card Number : </td>

				<td align="left"><input type="text" name="ccnumber" size="24" value="%%CCNUMBER%%">

				%%CCNUMBERREQUIRED%%</td>

			</tr>

			<tr>

				<td align="right" class="text">Expiration Date (mm/yyyy) : </td>

				<td align="left"><select name="ccmonth">

				<option value="">Select Month</option>

				%%CCMONTHS%%

				</select>

				

				<select name="ccyear">

				<option value="">Select Year</option>

				%%CCYEARS%%

				</select>

				%%CCEXPIREREQUIRED%% 			

			</tr>

			<tr>

				<td align="right" class="text">CVV Code : </td>

				<td align="left"><input type="text" name="cvvcode" size="5" value="%%CVVCODE%%">

				%%CVVREQUIRED%%</td>

			</tr>
			</table>
            
            </td></tr>
            
			<!-- END CREDITCARD -->

			<tr><td align="center"><a href="?action=view">View Cart</a>&nbsp;<img src="%%TEMPLATEPATH%%images/arrow.gif" width="11" height="11"></td><td>					

				<input type="submit" value="Verify Your Order">

				</td>

			</tr>

					<tr>

						<td align="left"><font size="2" face="Verdana">The prices shown are being <br>displayed 
                    	in %%CURRENCYNAME%%.</font></td>

						<td valign="top"><table width="100%" cellpadding="4" cellspacing="2" border="0">

								<tr>

									<td width="65%" align="right" class="text"><b>Sub Total</b></td>

									<td width="35%" align="right" class="text">%%SUBTOTAL%% &nbsp;</td>

								</tr>

<!-- BEGIN DISCOUNT -->

								<tr>

									<td align="right" class="text"><b>Discount</b></td>

									<td align="right" class="text">%%DISCOUNT%% &nbsp;</td>

								</tr>

<!-- END DISCOUNT -->

								<tr>
									<td align="right" class="text"><b>Shipping</b></td>
									<td align="right" class="text">%%SHIPPINGNAME%%<br />%%TOTALSHIPPING%% &nbsp;</td>
								</tr>

								<tr>

									<td align="right" class="text" valign="top"><b><!-- BEGIN TAXTITLE1 -->%%TAXTITLE1%% &nbsp;<br><!-- END TAXTITLE1 --><!-- BEGIN TAXTITLE2 --> %%TAXTITLE2%%  &nbsp;<br><!-- END TAXTITLE2 -->Total Tax</b> &nbsp;</td>

									<td align="right" class="text" valign="top"><!-- BEGIN SEPARATETAX1 -->%%SEPARATETAX1%% &nbsp;<br><!-- END SEPARATETAX1 --><!-- BEGIN SEPARATETAX2 --> %%SEPARATETAX2%% &nbsp;<br><!-- END SEPARATETAX2 -->%%TOTALTAX%% &nbsp;</td>

								</tr>

								

								<tr>

									<td align="right" class="text"><b>Total</b></td>

									<td align="right" class="text"><strong>%%GRANDTOTAL%% &nbsp;</strong></td>

								</tr>

							</table></td>

					</tr>

		</table>

	</form>

</center>

<?php
if (isset($_SESSION['BILLING']['PAYMENTTYPE']) && $_SESSION['BILLING']['PAYMENTTYPE'] == 'manual'){ 
 ?>
	<script type="text/javascript">
	<!--
		showDiv('manual');
	//-->
	</script>
<?php } ?>