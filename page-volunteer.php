<?php
/**
 * Template Name: Volunteer
 */

get_header(); ?>
        
      
	<div id="secondary" class="site-content">
        <h1>Volunteer to Help</h1>
		<div id="content" role="main">
            <div id="main-content">
            <?php the_block('main'); ?>
            
            
              <form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://leirion.wufoo.com/forms/z7x3p9/#public">

    

    <ul>

        <li id="foli1" class="notranslate      ">
            <label class="desc" id="title1" for="Field1">
                Name
                <span id="req_1" class="req">*</span>
            </label>
            <span>
                <input id="Field1" name="Field1" watermark="First" type="text" class="field text fn" value="" size="8" tabindex="1" required />
                <label for="Field1">First</label>
            </span>
            <span>
                <input id="Field2" name="Field2" watermark="Last" type="text" class="field text ln" value="" size="14" tabindex="2" required />
                <label for="Field2">Last</label>
            </span>
        </li>
        <li id="foli3" class="notranslate      ">
        
            <label class="desc" id="title3" for="Field3">
                Email
                <span id="req_3" class="req">*</span>
            </label>
            <div>
                <input id="Field3" name="Field3" watermark="someone@email.com" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" />
            </div>
        </li>
        <li id="foli205" class="phone notranslate      ">
            <label class="desc" id="title205" for="Field205">
                Phone Number
                <span id="req_205" class="req">*</span>
            </label>
            <span>
                <input id="Field205" name="Field205" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="4" />
                <label for="Field205">###</label>
            </span>
            <span class="symbol">-</span>
            <span>
                <input id="Field205-1" name="Field205-1" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="5" />
                <label for="Field205-1">###</label>
            </span>
            <span class="symbol">-</span>
            <span>
                <input id="Field205-2" name="Field205-2" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="6" />
                <label for="Field205-2">####</label>
            </span>
        </li>
        <li id="foli208" class="complex notranslate      ">
    <label class="desc" id="title208" for="Field208">
        Address
        <span id="req_208" class="req">*</span>
    </label>
    <div>
        <span class="full addr1">
            <input id="Field208" name="Field208" watermark="Street Address" type="text" class="field text addr" value="" tabindex="7" />
            <label for="Field208">Street Address</label>
        </span>
        <span class="full addr2">
            <input id="Field209" name="Field209" watermark="Address Line 2" type="text" class="field text addr" value="" tabindex="8" />
            <label for="Field209">Address Line 2</label>
        </span>
        <span class="left city">
            <input id="Field210" name="Field210" watermark="City" type="text" class="field text addr" value="" tabindex="9" />
            <label for="Field210">City</label>
        </span>
        <span class="right state">
            <input id="Field211" name="Field211" watermark="State" type="text" class="field text addr" value="" tabindex="10" />
            <label for="Field211">State</label>
        </span>
        <span class="left zip">
            <input id="Field212" name="Field212" watermark="Zip Code" type="text" class="field text addr" value="" maxlength="15" tabindex="11" />
            <label for="Field212">Zip Code</label>
        </span>
        <span class="right country hide">
            <select id="Field213" name="Field213" class="field select addr" tabindex="12">
                <option value="United States" selected="selected">United States</option>
                <option value="United States">United States</option>
                
            </select>
            <label for="Field213">Country</label>
        </span>
    </div>
</li>

        <li id="foli105" class="notranslate  twoColumns     ">
            <fieldset>
                <![if !IE | (gte IE 8)]>
                <legend id="title105" class="desc">I am interested in the following volunteer opportunitites: <span style="font-weight:normal; float:none; margin:0; padding:0;color:#5f7294">(check all that apply)</span>
                <span id="req_105" class="req">*</span>
                </legend>
                <![endif]>
                <!--[if lt IE 8]>
                <label id="title105" class="desc">
                Check All That Apply
                <span id="req_105" class="req">*</span>
                </label>
                <![endif]-->
                <div>
                    <span>
                        <input id="Field105" name="Field105" type="checkbox" class="field checkbox" value="I&#039;ll put a sign in my yard" tabindex="7" />
                        <label class="choice" for="Field105">I'll put a sign in my yard</label>
                    </span>
                    <span>
                        <input id="Field106" name="Field106" type="checkbox" class="field checkbox" value="I&#039;ll host an event" tabindex="8" />
                        <label class="choice" for="Field106">I'll host or sponsor an event</label>
                    </span>
                    <span>
                        <input id="Field107" name="Field107" type="checkbox" class="field checkbox" value="I&#039;ll make a donation" tabindex="9" />
                        <label class="choice" for="Field107">I'll make a donation</label>
                    </span>
                    <span>
                        <input id="Field108" name="Field108" type="checkbox" class="field checkbox" value="I&#039;ll make phone calls" tabindex="10" />
                        <label class="choice" for="Field108">I'll make phone calls</label>
                    </span>
                    <span>
                        <input id="Field109" name="Field109" type="checkbox" class="field checkbox" value="I&#039;ll deliver flyers in my neighborhood" tabindex="11" />
                        <label class="choice" for="Field109">I'll deliver flyers in my neighborhood</label>
                    </span>
                </div>
            </fieldset>
        </li>
        <li id="foli206"
            class="notranslate      ">
            <label class="desc" id="title206" for="Field206">
                Other Volunteer Opportunities
            </label>

            <div>
                <textarea id="Field206"
                    name="Field206"
                    class="field textarea small"
                    watermark="Make a suggestion."
                    spellcheck="true"
                    rows="10" cols="50"
                    tabindex="12"
                    onkeyup=""></textarea>

            </div>
        </li>
        <li class="buttons ">
            <div>

                <input id="saveForm" name="saveForm" class="btTxt submit"
                    type="submit" value="Submit" />
            </div>
        </li>

        <li class="hide">
            <label for="comment">Do Not Fill This Out</label>
            <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
            <input type="hidden" id="idstamp" name="idstamp" value="yDwuKRhktyKu/Q9lgtmxnyz2ACUOM4fl+tqhz+MdkeU=" />
        </li>
    </ul>
</form>

            
               
            </div>
            
            <div id="sidebar">
                <?php the_block('rightsidemain'); ?>
                
                
            </div>
	
            <div class="clear-both"></div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>