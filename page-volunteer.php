<?php
/**
 * Template Name: Volunteer
 */

get_header(); ?>
        
      
	<div id="secondary" class="site-content">
        <h1><?php the_title();  ?></h1>
		<div id="content" role="main">
            <div id="main-content">
              <form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://leirion.wufoo.com/forms/z7x3p9/#public">

    <header id="header" class="info">
        <div>Thank you for your interest in volunteering. Please fill out the form below with your areas of interest and someone from our campaign will follow up with you shortly.</div>
    </header>

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
            </label>
            <div>
                <input id="Field3" name="Field3" watermark="Email" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" />
            </div>
        </li>
        <li id="foli205" class="phone notranslate      ">
            <label class="desc" id="title205" for="Field205">
                Phone Number
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
        <li id="foli105" class="notranslate  twoColumns     ">
            <fieldset>
                <![if !IE | (gte IE 8)]>
                <legend id="title105" class="desc">Check All That Apply
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
                        <label class="choice" for="Field106">I'll host an event</label>
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
                Other suggestions...
            </label>

            <div>
                <textarea id="Field206"
                    name="Field206"
                    class="field textarea small"
                    watermark=""
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