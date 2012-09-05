<?php

echo $this->Form->create('notifications');?>


<form class="form-horizontal" id="loginHere" method='post' action=''>
    <fieldset>

        <legend>Login</legend>

        <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="What’s your email address?" data-original-title="Email">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Password</label>
            <div class="controls">
                <input type="password" class="input-xlarge" id='password' rel="popover" data-content="What’s your password my boy?" data-original-title="password">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button type="submit" class="btn btn-success" onclick="alert('Oh my god');">login</button>
            </div>
        </div>

    </fieldset>
</form>



