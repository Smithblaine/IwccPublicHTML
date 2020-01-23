<?php include '../view/header.php'; ?>
    <main>
        <section>
            <div id="updateWrapper">
                <div id="update">
                    <form action="index.php" method="post" id="selected_update">
                        <input type="hidden" name="action" value="selected_update">
                        <?php foreach ($customers as $customer) : ?>
                            <input type="hidden" name="customerID" value="<?php echo $customer['customerID'] ; ?>">
                            <div class="block">
                                <label>First Name:</label>
                                <input type="text" name="firstName" value="<?php echo $customer['firstName']; ?>" />
                            </div>
                            <br>
                            <div class="block">
                                <label>last Name:</label>
                                <input type="text" name="lastName" value="<?php echo $customer['lastName']; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>Address:</label>
                                <input type="text" name="address" value="<?php echo $customer['address']; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>City:</label>
                                <input type="text" name="city" value="<?php echo $customer['city'] ; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>State:</label>
                                <input type="text" name="state" value="<?php echo $customer['state'] ; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>Postal Code:</label>
                                <input type="text" name="postalCode" value="<?php echo $customer['postalCode']; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>Country:</label>
                                <select name="countryCode">
                                    <?php foreach ($customers as $customer) : ?>
                                        <option value="<?php echo $customer['countryCode']; ?>">
                                            <?php echo $customer['countryName']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <?php foreach ($countCodes as $countCode) : ?>
                                        <option value="<?php echo $countCode['countryCode']; ?>">
                                            <?php echo $countCode['countryName']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br>
                            <div class="block">
                                <label>Phone:</label>
                                <input type="text" name="phone" value="<?php echo $customer['phone']; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>Email:</label>
                                <input type="text" name="email" value="<?php echo $customer['email']; ?>"/>
                            </div>
                            <br>
                            <div class="block">
                                <label>Password:</label>
                                <input type="text" name="password" value="<?php echo $customer['password']; ?>"/>
                            </div>
                            <input type="submit" value="Update Customer">
                        <?php endforeach; ?>

                    </form>
                </div>
            </div>
        </section>
        <p class="last_paragraph">
            <a href="index.php?action=searchList">Search Customers</a>
        </p>
    </main>
<?php include '../view/footer.php'; ?>