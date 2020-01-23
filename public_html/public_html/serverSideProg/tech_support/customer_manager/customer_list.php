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
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?php echo $customer['firstName']. " " . $customer['lastName']; ?></td>
                        <td><?php echo $customer['email']; ?></td>
                        <td><?php echo $customer['city']; ?></td>
                        <td>
                            <form action="index.php" method="post" id="select_form">
                                <input type="hidden" name="action" value="selected_user">
                                <input type="hidden" name="firstName"
                                       value="<?php echo $customer['firstName']; ?>">
                                <input type="hidden" name="lastName"
                                       value="<?php echo $customer['lastName']; ?>">
                                <input type="hidden" name="email"
                                       value="<?php echo $customer['email']; ?>">
                                <input type="hidden" name="city"
                                       value="<?php echo $customer['city']; ?>">
                                <input type="submit" value="Select">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
<?php include '../view/footer.php'; ?>