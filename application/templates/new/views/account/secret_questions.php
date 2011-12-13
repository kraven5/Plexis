<div class="left-box">
    <h2>Secret Questions</h2>
    <div class="left-box-content">
        <p>
            For security reasons, every account holder is required to set their Account Recovery question and answer. Before we can allow
            you to access your account, we require you to set your account recovery secret question and answer. Please Note: Once you set
            your account security question / answer, you CANNOT change it, so make sure you answer correctly.
        </p>
        <form method="post" action="{SITE_URL}/account/recover/set">
            <input type="hidden" name="action" value="set" />
            <fieldset>
                <div class="div-center">
                    <label for="sq">Secret Question:</label> 
                    <select name="sq">{secret_questions}</select>
                    
                    <label for="sa">Secret Answer:</label> 
                    <input type="text" name="sa" id="sa" value="" size="30" tabindex="6" /><br />
                    
                    <center><input type="submit" name="submit" value="Submit" class="button" tabindex="8" /></center>
                </div>
            </fieldset>
        </form>
    </div>
</div>