<div class="full_w overflow_auto">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="p_20 overflow_x full_w flex flex_x_center">
        <div class="card" style="width:768px">
            <div class="flex">


                <div class="br_1 pr_10" style="min-width: 200px; max-width: 210px;">
                    <form action="">
                        <div class="mb_8">
                            <a href="" class="button_text">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                        </div>
                        <div>
                            <center>
                                <div style="background: gray; width: 5em; height: 5em; border-radius: 50%;"></div>
                            </center>
                            <center class="pt_4">
                                <label for="" class="text_small mt_5">January 8, 2021 10:30am</label>
                            </center>
                        </div>

                        <br><br>
                    
                        <h5>PEROSNAL INFO</h5><hr>
                        <div>

                            <p class="mt_8"><b>John</b></p>
                            <label class="color_dark" for="">First name</label>
                            {{-- <input type="text"> --}}
                            <p class="mt_8"><b>DeCastro</b></p>
                            <label class="color_dark" for="">Last name</label>
                            {{-- <input type="text"> --}}
                            <p class="mt_8"><b>Molino</b></p>
                            <label class="color_dark" for="">Middle name</label>
                            {{-- <input type="text"> --}}
                            <p class="mt_8"><b>40</b></p>
                            <label class="color_dark" for="">Age</label>
                            {{-- <input type="number"> --}}
                            <p class="mt_8"><b>Male</b></p>
                            <label class="color_dark" for="Gender">Gender</label>
                            {{-- <select name="" id="">
                                <option value="" selected hidden>Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select> --}}
                            <p class="mt_8"><b>Engineer</b></p>
                            <label class="color_dark" for="">Occupation</label>
                            {{-- <input type="text"> --}}
                            <p class="mt_8"><b>Tandag City</b></p>
                            <label class="color_dark" for="">Address</label>
                            {{-- <input type="text"> --}}
                        </div>

                        <br><br>

                        <h5>CONTACT INFO</h5><hr>
                        <div>
                            <p class="mt_8"><b>Engineer@gmail.com</b></p>
                            <label class="color_dark" for="">Email</label>
                            {{-- <input type="email"> --}}
                            <p class="mt_8"><b>123445678875</b></p>
                            <label class="color_dark" for="">Mobile number</label>
                            {{-- <input type="number"> --}}
                        </div>
                    </form>
                </div>



                <div class="flex flex_column ml_10">
                    <div>
                        <h5>SUBJECTIVE EXAM</h5>
                        <hr>
                        <div class="overflow_x mt_10">
                            <form action="">
                                <table class="noformat" style="min-width: 400px">
                                    <tr>
                                        <td>
                                            <label for="">SPH</label>
                                            <input class="noformat" type="text" value="OD">
                                        </td>
                                        <td>
                                            <label for="">SPH</label>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <label for="">CYL</label>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <label for="">AXIS</label>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <label for="">NVA</label>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <label for="">PH</label>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <label for="">CVA</label>
                                            <input type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input class="noformat" type="text" value="OS">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div class="text_right mt_10">
                                <button type="submit">Save exam</button>
                            </div>
                        </div>
                    </div>

                    {{-- <hr class="my_15"> --}}
                    <br>

                    <form action="">
                        <div>
                            <h5>PURCHASE</h5>
                            <hr>
                            <div class="grid grid_col_2 gap_1 mt_10">
                                <div class="flex flex_column flex_x_end">
                                    <label for="">TINT</label>
                                    <input type="text" list="tint_suggestions">
                                    <datalist id="tint_suggestions">
                                        <option value="Tint 1">Tint 1</option>
                                        <option value="Tint 2">Tint 2</option>
                                        <option value="Tint 3">Tint 3</option>
                                        <option value="Tint 4">Tint 4</option>
                                    </datalist>
                                    <label for="">LENS</label>
                                    <input type="text" list="lens_suggestions">
                                    <datalist id="lens_suggestions">
                                        <option value="Lens 1"></option>
                                        <option value="Lens 2"></option>
                                        <option value="Lens 3"></option>
                                        <option value="Lens 4"></option>
                                    </datalist>
                                    <label for="">LENS QUANTITY</label>
                                    <input type="number">
                                    <button type="submit" class="mt_7 button_gradient">+ Add lens</button>
                                </div>
                                <div class="flex flex_column flex_x_end">
                                    <label for="">FRAME</label>
                                    <input type="text" list="Frame_suggestions">
                                    <datalist id="Frame_suggestions">
                                        <option value="Frame 1"></option>
                                        <option value="Frame 2"></option>
                                        <option value="Frame 3"></option>
                                        <option value="Frame 4"></option>
                                    </datalist>
                                    <label for="">FRAME QUANTITY</label>
                                    <input type="number">
                                    <button type="submit" class="mt_7 button_gradient">+ Add Frame</button>
                                </div>
                                <div class="b_1 p_5">
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 1</p>
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 1</p>
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 1</p>
                                </div>
                                <div class="b_1 p_5">
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 2</p>
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 2</p>
                                    <p><a class="button_link" href="#"><i class="fas fa-remove mr_3"></i></a> Item 2</p>
                                </div>
                                <div style="grid-column: 1 / 3">
                                    <label for="">REMARKS</label>
                                    <input class="full_w" type="text">
                                </div>
                            </div>
                        </div>

                        <hr class="my_15">

                        <div>
                            <div class="grid grid_col_2 gap_1">
                                <div>
                                    <label for="">DEPOSIT</label>
                                    <input type="number">
                                    <label for="">DISCOUNT</label>
                                    <input type="number">
                                </div>
                                <div>
                                    <label for="">BALANCE</label>
                                    <input type="number" value="500.00">
                                    <label for="">TOTAL AMOUNT</label>
                                    <input type="number" value="1200.00">
                                </div>
                            </div>
                            <br><br>
                            <div class="flex flex_x_end flex_y_center">
                                <a href="" class="button_text mr_15">PROCEED TO ORDER</a>
                                <button>Save payment</button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>
        </div>
    </div>
</div>
