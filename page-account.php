<?php 
if ( !is_user_logged_in() ) {   
  wp_redirect(esc_url(site_url('/')));
  exit();
}?>

<?php 
get_header();
?>


<section class="main">
    <div class="container">
    <form action="">
          <div class="row">
            <div class="col-md-4">
              <div class="myaccount-login">
                <img src="./img/profile-img.jpg" alt="" />
                <h3 class="text-center mb-3">Manage Login Info</h3>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" />
                </div>

                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" />
                </div>

                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" />
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="myaccount-personal">
                <h3>Personal Information</h3>
                <div class="fullname">
                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" />
                  </div>

                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" />
                  </div>

                  <div class="form-group">
                    <label for="">MI</label>
                    <input type="text" />
                  </div>
                </div>
                <div class="address">
                  <div class="form-group">
                    <label for="">Street No.</label>
                    <input type="number" />
                  </div>

                  <div class="form-group">
                    <label for="">Street Name</label>
                    <input type="text" />
                  </div>

                  <div class="form-group">
                    <label for="">City</label>
                    <input type="text" />
                  </div>

                  <div class="form-group">
                    <label for="">Zip Code</label>
                    <input type="number" />
                  </div>
                </div>
              </div>

              <table class="mysponsor">
                <tr>
                  <th>Name</th>
                  <th class="text-center">Frequency</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Action</th>
                </tr>

                <tr>
                  <td>
                    <div class="account-thumb">
                      <img src="<?php echo get_template_directory_uri()?>/img/children-thumbnail.jpg" alt="" />
                      <p>Andrea - 5yrs old</p>
                    </div>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="monthly">Monthly</option>
                      <option value="one-time">One Time</option>
                    </select>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="$10.00">$10.00</option>
                      <option value="$50.00">$50.00</option>
                      <option value="$100.00">$100.00</option>
                    </select>
                  </td>

                  <td>
                    <ul class="user-action">
                      <li>
                        <a href="#"><i class="fas fa-user-edit"></i></a>
                      </li>
                      <li>
                        <a href="#"> <i class="fas fa-user-minus"></i></a>
                      </li>
                    </ul>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="account-thumb">
                      <img src="<?php echo get_template_directory_uri()?>/img/children-thumbnail.jpg" alt="" />
                      <p>Andrea - 5yrs old</p>
                    </div>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="monthly">Monthly</option>
                      <option value="one-time">One Time</option>
                    </select>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="$10.00">$10.00</option>
                      <option value="$50.00">$50.00</option>
                      <option value="$100.00">$100.00</option>
                    </select>
                  </td>

                  <td>
                    <ul class="user-action">
                      <li>
                        <a href="#"><i class="fas fa-user-edit"></i></a>
                      </li>
                      <li>
                        <a href="#"> <i class="fas fa-user-minus"></i></a>
                      </li>
                    </ul>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="account-thumb">
                      <img src="<?php echo get_template_directory_uri()?>/img/children-thumbnail.jpg" alt=""/>
                      <p>Andrea - 5yrs old</p>
                    </div>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="monthly">Monthly</option>
                      <option value="one-time">One Time</option>
                    </select>
                  </td>

                  <td>
                    <select name="" id="">
                      <option value="$10.00">$10.00</option>
                      <option value="$50.00">$50.00</option>
                      <option value="$100.00">$100.00</option>
                    </select>
                  </td>

                  <td>
                    <ul class="user-action text-center">
                      <li>
                        <a href="#"><i class="fas fa-user-edit"></i></a>
                      </li>
                      <li>
                        <a href="#"> <i class="fas fa-user-minus"></i></a>
                      </li>
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <ul class="main-action ">
            <li><a href="#" class="btn bg-primary">Save</a></li>
            <li><a href="#" class="btn bg-lightgray text-light">Back</a></li>
          </ul>
        </form>
    </div>
</section>
<?php get_footer(); ?>