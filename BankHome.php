
<p>
<img src="/images/logo.jpg" alt="logo" style="float:right;width 50px;height 50px;">
<h1>J&W Unlimited Online Banking</h1>
</p>

<p>Authorized Use Only</p>
<p>This website is for testing purposes</p>

<a id="enter" href="BankMain.php">Bank App Home</a><br><br>
<br><br>

<html>
    <body>
        <h1>Account Options</h1><br><br>
        Account Number: 24222<br>Account Name: Bell, Alex<br><br>Balances: <br><br>Checking Balance :9991.00<br>Credit Card Balance :391.00        <br><br>
        <h2>Available Account Actions:</h2>
        <p>Make Payment to Credit Card<p>
        <form action="paycc.php" method="get">
            Amount of Payment: <input type="text" name="payment"><br>
            <input type="hidden" id="Accnt" name="Accnt" value=24222>            <input type="submit", id='submit'>
        </form>

        <br><br>
        <p>

        <button id="logout", onclick="window.location.href='logout.php';">
            Logout</button>
    </body>

</html>