<?php
  echo $_POST["ticketNo"];
?>

<div class="content">
<div class="container">
  <div class="row">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
      <h2>Tour & Travel Reservation Booking Form</h2>
      </div>
    </div>

   <div class="row">

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
        <div class="tour-booking-form">
            <form>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label required" for="select">乗車地</label>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">乗車地を選択してください</option>
                                    <option value="">23：00発　名古屋駅百合の噴水前</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="datepicker">乗車日</label>
                            <div class="input-group">
                                <input type="date" name="example2">
                                <span class="input-group-addon"></span>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label required" for="select">降車地</label>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">降車地を選択して下さい</option>
                                    <option value="">6：00着　新宿バスタ</option>
                                    <option value="">6：20着　東京駅</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="select">合計料金</label>
                            <div class="select">
                                <input type="text" name="" id="" value="5,000" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label required" for="select">乗車人数</label>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">大人男性-</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">大人女性-</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">小人男性-</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="select">
                                <select id="select" name="select" class="form-control">
                                    <option value="">小人女性-</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="select">合計</label>
                            <div class="select">
                                <input type="text" name="" id="" value="大人男性1名　大人女性1名" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"><input type="submit" value="カートに入れる"></div>
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="name">Name</label>
                            <input id="name" type="text" placeholder="First Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="email"> Email</label>
                            <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="phone"> Phone</label>
                            <input id="phone" type="text" placeholder="(222) 222-2222" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="country">Country</label>
                            <input id="country" type="text" placeholder="India" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="city">City</label>
                            <input id="city" type="text" placeholder="Ahmedabad" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label" for="textarea">Describe Your Travel Requirements</label>
                            <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Write Your Requirements"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button type="submit" name="singlebutton" class="btn btn-primary">send Enquiry</button>
                    </div>
                </div> -->
                </form>
        </div>

      </div>
	</div>
</div>
</div>
