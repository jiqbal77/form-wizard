@section('title','First Step')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <div class="wizard card-like">
                <form action="#">
                    <div class="wizard-header">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="text-center">
                                    Welcome to an amazing Experience
                                    <br>
                                    <small>Provide us some details to get you started
                                    </small>
                                </h1>
                                <hr/>
                                <div class="steps text-center">
                                    <div class="wizard-step {{ $currentStep == 'initial'?'active':'' }}"></div>
                                    <div class="wizard-step {{ $currentStep == 'second'?'active':'' }}"></div>
                                    <div class="wizard-step {{ $currentStep == 'result'?'active':'' }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-body">
                        <div class="step initial {{ $currentStep == 'initial'?'active':'' }}">
                            <div class="row">
                                <h4>Initials</h4>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" id="firstName" wire:model="firstName">
                                        @error('firstName')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" id="lastName" wire:model="lastName">
                                        @error('lastName')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h4>Address</h4>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" id="address" wire:model="address">
                                        @error('address')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" id="city" wire:model="city">
                                        @error('city')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <input type="text" class="form-control" id="country" wire:model="country">
                                        @error('country')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h4>Date of Birth</h4>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="day">Day:</label>
                                        <select class="form-control" id="day" wire:model="day">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                        </select>
                                        @error('day')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="month">Month:</label>
                                        <select class="form-control" id="month" wire:model="month">
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        @error('month')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="year">Year:</label>
                                        <input type="number" min="1900" class="form-control" id="year" wire:model="year"
                                               max="2024" step="1" value="2000"/>

                                        @error('year')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step second {{ $currentStep == 'second'?'active':'' }}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="martialStatus">Are you married:</label>
                                        <select id="martialStatus" wire:model.live="martialStatus" class="form-control">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                @if($martialStatus == 'yes')
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="marriageCountry">Country of marriage:</label>
                                            <input type="text" id="marriageCountry" wire:model.live="marriageCountry"
                                                   class="form-control">
                                            @error('marriageCountry')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                @if($martialStatus == 'no')
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="widowed">Are you widowed?</label>
                                            <select id="widowed" wire:model.live="widowed" class="form-control">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            @error('widowed')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="everMarried">Have you ever been married in the past?</label>
                                            <select id="everMarried" wire:model.live="everMarried" class="form-control">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            @error('widowed')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @if($martialStatus == 'yes')
                                <div class="row">
                                    <h4>Date of Marriage</h4>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="marriageDay">Day:</label>
                                            <select class="form-control" id="marriageDay" wire:model="marriageDay">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                            </select>
                                            @error('marriageDay')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="marriageMonth">Month:</label>
                                            <select class="form-control" id="marriageMonth" wire:model="marriageMonth">
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            @error('marriageMonth')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="marriageYear">Year:</label>
                                            <input type="number" min="1900" class="form-control" id="marriageYear"
                                                   wire:model.blur="marriageYear" max="2024" step="1" value="2000"/>

                                            @error('marriageYear')
                                            <p class="error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(!$isUserAdult)
                                <p class="error">You are not eligible to apply because your marriage
                                    occurred before your 18th birthday.</p>
                            @endif
                        </div>
                        <div class="step second {{ $currentStep == 'result'?'active':'' }}">
                            @if($currentStep == 'result')
                                <div class="row">
                                    <h2>Result</h2>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="firstName">First Name:{{ $firstName }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">Last Name:{{ $lastName }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">Date of Birth:{{ \Carbon\Carbon::parse($day."-".$month."-".$year)->format("M d Y") }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="firstName">Address:{{ $address }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">City:{{ $city }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">Country:{{ $country }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="firstName">Married:{{ $martialStatus }}</label>
                                    </div>
                                </div>
                                @if($martialStatus == 'yes')
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lastName">Marriage Date:{{ \Carbon\Carbon::parse($marriageDay."-".$marriageMonth."-".$marriageYear)->format("M d Y") }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lastName">Marriage Country:{{ $marriageCountry }}</label>
                                    </div>
                                </div>
                                @elseif($martialStatus == 'no')
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">Ever Married?:{{ $everMarried }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="lastName">Are you a Widowed:{{ $widowed }}</label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="row">

                            @if($currentStep == 'initial')
                                <div class="col-xs-6 pull-right text-center">
                                    <button id="wizard-next" wire:click="updateStep('second')" type="button"
                                            class="btn btn-irv">
                                        Next
                                    </button>
                                </div>
                            @else
                                <div class="col-xs-6 pull-left block-center">
                                    <button id="wizard-prev" wire:click="updateStep('{{ $previousStep }}','back')"
                                            type="button" class="btn btn-irv btn-irv-{{ $currentStep == 'result'?'primary':'default' }}">
                                        {{ $currentStep == 'result'?'Update':'Previous' }}
                                    </button>
                                </div>
                                @if($isUserAdult && $currentStep != 'result')
                                    <div class="col-xs-6 pull-right block-center">
                                        <button id="wizard-subm" wire:click="updateStep('result')" type="button"
                                                class="btn btn-irv">
                                            Submit
                                        </button>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
