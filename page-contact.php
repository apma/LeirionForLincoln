<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="secondary" class="site-content">
        <h1>Contact Us</h1>
		<div id="content" role="main">
            <div id="main-content">
                <?php the_block('main'); ?>
                <form id="form3" name="form3" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
        action="https://leirion.wufoo.com/forms/q7x2x3/#public">

        
        

        <ul>

            <li id="foli1" class="notranslate      ">
                <label class="desc" id="title1" for="Field1">
                    Name
                    <span id="req_1" class="req">*</span>
                </label>
                <span>
                    <input id="Field1" name="Field1"  watermark="First" type="text" class="field text fn" value="" size="8" tabindex="1" />
                    <label for="Field1">First</label>
                </span>
                <span>
                    <input id="Field2" name="Field2"  watermark="Last" type="text" class="field text ln" value="" size="14" tabindex="2" />
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
            <li id="foli4" class="phone notranslate      ">
                <label class="desc" id="title4" for="Field4">
                    Phone Number
                </label>
                <span>
                    <input id="Field4" name="Field4" watermark="555" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="4" />
                    <label for="Field4">###</label>
                </span>
                <span class="symbol">-</span>
                <span>
                    <input id="Field4-1" name="Field4-1" watermark="555" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="5" />
                    <label for="Field4-1">###</label>
                </span>
                <span class="symbol">-</span>
                <span>
                    <input id="Field4-2" name="Field4-2" watermark="5555" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="6" />
                    <label for="Field4-2">####</label>
                </span>
            </li>
            <li id="foli5"
                class="notranslate      ">
                <label class="desc" id="title5" for="Field5">
                    Comment or Question
                </label>

                <div>
                    <textarea id="Field5"
                        name="Field5"
                        watermark="Send us your thoughts."
                        class="field textarea medium"
                        spellcheck="true"
                        rows="10" cols="50"
                        tabindex="7"
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
                <input type="hidden" id="idstamp" name="idstamp" value="z4jVBsoC01CgRnCX3/uvzGMS3G10Ue5Hh40OW2Cz8II=" />
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