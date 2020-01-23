<?php include '../view/header.php'; ?>
    <main>
        <section>
            <div id="customwrapper">
                <div id="customs">
                    <form action="index.php" method="post" id="search_form">
                        <input type="hidden" name="action" value="search_last">
                        <label>Last Name:</label>
                        <input type="text" name="lastName" />
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <main>
        <h1>Customer Search</h1>
        <section>
            <h1>Results</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </section>
    </main>
<?php include '../view/footer.php'; ?>