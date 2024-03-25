<div class="passChange">
    <div class="card">
        <span id="cross">x</span>
        <h3 class="username">Change pass for !user!</h3>
        <div class="temp">
            <form id='form1' method='POST' class='temp'>
            <label for="choice">keuze: </label>
            <select name="choice" id="choice">
                <option disabled selected value> -- select an option -- </option>
                <option value="userRole">User Role</option>
                <option value="pass">password</option>
            </select>
                
                <div class="option" id="pass">
                    <label for="password">New password</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="option" id="userRole">
                    <label for="Roles">Role: </label>
                    <select name="Roles" id="Roles">
                        <option disabled selected value> -- userRole -- </option>
                        <option value="1">User</option>
                        <option value="88">Admin</option>
                    </select>
                </div>
            </div>
            <div id="submit">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>