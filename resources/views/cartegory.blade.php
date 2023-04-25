@extends('header')
@section('main-section')
<section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="ti-shopping-cart"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="ti-credit-card 3"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                        
                                <tr>

                                    <td>
                                        <img src="" alt="">
                                    </td>
                                    <td>
                                        <p></p>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <!-- <form action="./delete.php" method="post">
                                            <button type="submit">X</button>
                                            <input type="hidden" value="<?php echo $row['shopping_cart_name'] ?>" name="delete">
                                        </form> -->
                                    </td>
                                </tr>
                        
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <?php

                        $sql1 = "SELECT sum(shopping_cart_soluong) as total1 FROM tbl_shopping_cart";
                        $sql2 = "SELECT sum(shopping_cart_thanhtien) as total2 FROM tbl_shopping_cart";

                        $result1 = mysqli_query($conn, $sql1);
                        $result2 = mysqli_query($conn, $sql2);



                        while ($row1 = mysqli_fetch_assoc($result1)) {

                        ?>
                            <tr>
                                <th colspan="2">Total</th>
                            </tr>
                            <tr>
                                <td>Total products</td>
                                <td>
                                    <?php
                                    echo $row1['total1'];
                                    $_SESSION['total_products'] = $row1['total1'];
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                            <tr>
                                <td>Amount money</td>
                                <td>$<?php echo $row2['total2'] ?></td>
                            </tr>
                            <tr>
                                <td>Total </td>
                                <td style="font-weight: bold;">$<?php echo $row2['total2'];
                                $_SESSION['total_money'] = $row2['total2'] ?></td>
                            </tr>
                        <?php
                        }

                        ?>
                    </table>
                    <?php
                    $username = $_SESSION['username']; ?>
                    <div class="cart-content-right-text">
                    <div class="cart-content-right-button">
                        <a href="./thanhtoan.php"><button>Pay</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('footer')