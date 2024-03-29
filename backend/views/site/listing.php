<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="row m-t-25">
<div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
    <div class="filters m-b-45">
        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                <option selected="selected">All Properties</option>
                <option value="">Products</option>
                <option value="">Services</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 132.15px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-ut-container"><span class="select2-selection__rendered" id="select2-property-ut-container" title="Products">Products</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="dropDownSelect2"></div>
        </div>
        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
            <select class="js-select2 au-select-dark select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                <option selected="selected">All Time</option>
                <option value="">By Month</option>
                <option value="">By Day</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 96.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-mu-container"><span class="select2-selection__rendered" id="select2-time-mu-container" title="By Day">By Day</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
    <div class="table-responsive table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>name</td>
                    <td>role</td>
                    <td>type</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6>lori lynch</h6>
                            <span>
                                <a href="#">johndoe@gmail.com</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role admin">admin</span>
                    </td>
                    <td>
                        <div class="rs-select2--trans rs-select2--sm">
                            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                <option selected="selected">Full Control</option>
                                <option value="">Post</option>
                                <option value="">Watch</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-ct-container"><span class="select2-selection__rendered" id="select2-property-ct-container" title="Full Control">Full Control</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </td>
                    <td>
                        <span class="more">
                            <i class="zmdi zmdi-more"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox" checked="checked">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6>lori lynch</h6>
                            <span>
                                <a href="#">johndoe@gmail.com</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role user">user</span>
                    </td>
                    <td>
                        <div class="rs-select2--trans rs-select2--sm">
                            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                <option value="">Full Control</option>
                                <option value="" selected="selected">Post</option>
                                <option value="">Watch</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 110.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-45-container"><span class="select2-selection__rendered" id="select2-property-45-container" title="Full Control">Full Control</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </td>
                    <td>
                        <span class="more">
                            <i class="zmdi zmdi-more"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6>lori lynch</h6>
                            <span>
                                <a href="#">johndoe@gmail.com</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role user">user</span>
                    </td>
                    <td>
                        <div class="rs-select2--trans rs-select2--sm">
                            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                <option value="">Full Control</option>
                                <option value="" selected="selected">Post</option>
                                <option value="">Watch</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 110.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-0p-container"><span class="select2-selection__rendered" id="select2-property-0p-container" title="Full Control">Full Control</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </td>
                    <td>
                        <span class="more">
                            <i class="zmdi zmdi-more"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6>lori lynch</h6>
                            <span>
                                <a href="#">johndoe@gmail.com</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role member">member</span>
                    </td>
                    <td>
                        <div class="rs-select2--trans rs-select2--sm">
                            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                <option selected="selected">Full Control</option>
                                <option value="">Post</option>
                                <option value="">Watch</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 118.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-xt-container"><span class="select2-selection__rendered" id="select2-property-xt-container" title="Full Control">Full Control</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </td>
                    <td>
                        <span class="more">
                            <i class="zmdi zmdi-more"></i>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="user-data__footer">
        <button class="au-btn au-btn-load">load more</button>
    </div>
</div>
</div>