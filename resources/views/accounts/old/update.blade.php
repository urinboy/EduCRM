<form action="{{ route('profile.update', $data->id) }}" class="row gy-3 gy-xxl-4" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- <div class="col-12">
        <div class="row gy-2">
            <label for="photo" class="col-12 form-label m-0">Profile Image</label>
            <div class="col-12">
                <img src="{{ $data->photo ? $data->photo : 'https://bootstrapbrain.com/demo/components/profiles/profile-1/assets/img/profile-img-1.jpg' }}"
                    class="img-fluid w-25" alt="{{ Auth::user()->name }}">
            </div>
            <div class="col-12">
                <a href="#!" class="d-inline-block bg-primary link-light lh-1 p-2 rounded">
                    <i class="bi bi-upload"></i>
                </a>
                <a href="#!" class="d-inline-block bg-danger link-light lh-1 p-2 rounded">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>
    </div> --}}
    <div class="mb-3">
        <label for="photo">
            @if ($data->photo)
                <img src="{{ Storage::url($data->photo) ?? '/storage/photos/urinboydev.png' }}" alt="Profile Photo"
                    class="img-thumbnail mb-2" width="150">
            @endif
        </label>
        <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo">
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
            name="first_name" value="{{ old('first_name', $data->first_name) }}">
        @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
            name="last_name" value="{{ old('last_name', $data->last_name) }}">
        @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="middle_name" class="form-label">Middle Name</label>
        <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name"
            name="middle_name" value="{{ old('middle_name', $data->middle_name) }}">
        @error('middle_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="birthday" class="form-label">Birthday</label>
        <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday"
            name="birthday" value="{{ old('birthday', $data->birthday) }}">
        @error('birthday')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
            <option value="male" {{ old('gender', $data->gender) == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender', $data->gender) == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender', $data->gender) == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3">{{ old('bio', $data->bio) }}</textarea>
        @error('bio')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
            value="{{ old('phone', $data->phone) }}">
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="organization_id" class="form-label">Organization</label>
        <select class="form-control @error('organization_id') is-invalid @enderror" id="organization_id"
            name="organization_id">
            <!-- Assuming you pass $organizations to the view -->
            <option value="">Select Organization</option>
            @foreach ($organizations as $organization)
                <option value="{{ $organization->id }}"
                    {{ old('organization_id', $data->organization_id) == $organization->id ? 'selected' : '' }}>
                    {{ $organization->name }}</option>
            @endforeach
        </select>
        @error('organization_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="address_id" class="form-label">Address</label>
        <select class="form-control @error('address_id') is-invalid @enderror" id="address_id" name="address_id">
            <!-- Assuming you pass $addresses to the view -->
            <option value="">Select Address</option>
            @foreach ($addresses as $address)
                <option value="{{ $address->id }}"
                    {{ old('address_id', $data->address_id) == $address->id ? 'selected' : '' }}>
                    {{ $address->address }}</option>
            @endforeach
        </select>
        @error('address_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="language_id" class="form-label">Language</label>
        <select class="form-control @error('language_id') is-invalid @enderror" id="language_id" name="language_id">
            <!-- Assuming you pass $languages to the view -->
            <option value="">Select Language</option>
            @foreach ($languages as $language)
                <option value="{{ $language->id }}"
                    {{ old('language_id', $data->language_id) == $language->id ? 'selected' : '' }}>
                    {{ $language->name }}</option>
            @endforeach
        </select>
        @error('language_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="currency_id" class="form-label">Currency</label>
        <select class="form-control @error('currency_id') is-invalid @enderror" id="currency_id" name="currency_id">
            <!-- Assuming you pass $currencies to the view -->
            <option value="">Select Currency</option>
            @foreach ($currencies as $currency)
                <option value="{{ $currency->id }}"
                    {{ old('currency_id', $data->currency_id) == $currency->id ? 'selected' : '' }}>
                    {{ $currency->name }}</option>
            @endforeach
        </select>
        @error('currency_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-md-4">
        <label for="status" class="form-label">Status</label>
        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" @if (!Auth::user()->roles['0']->name === "Super Admin" && $data->user->roles['0']->name === "Super Admin") disabled @endif
        >
            <option value="active" {{ old('status', $data->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status', $data->status) == 'inactive' ? 'selected' : '' }}>Inactive
            </option>
            <option value="unallowed" {{ old('status', $data->status) == 'unallowed' ? 'selected' : '' }}>Unallowed
            </option>
            <option value="blocked" {{ old('status', $data->status) == 'blocked' ? 'selected' : '' }}>Blocked</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>

{{-- <form action="#!" class="row gy-3 gy-xxl-4">
    <div class="col-12">
        <div class="row gy-2">
            <label class="col-12 form-label m-0">Profile Image</label>
            <div class="col-12">
                <img src="{{ $data->photo ? $data->photo : 'https://bootstrapbrain.com/demo/components/profiles/profile-1/assets/img/profile-img-1.jpg' }}"
                    class="img-fluid w-25" alt="{{ Auth::user()->name }}">
            </div>
            <div class="col-12">
                <a href="#!"
                    class="d-inline-block bg-primary link-light lh-1 p-2 rounded">
                    <i class="bi bi-upload"></i>
                </a>
                <a href="#!"
                    class="d-inline-block bg-danger link-light lh-1 p-2 rounded">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <label for="inputFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" value="Ethan">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" value="Leo">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputEducation" class="form-label">Education</label>
        <input type="text" class="form-control" id="inputEducation"
            value="M.S Computer Science">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputSkills" class="form-label">Skills</label>
        <input type="text" class="form-control" id="inputSkills"
            value="HTML, SCSS, Javascript, React, Vue, Angular, UI, UX">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputJob" class="form-label">Job</label>
        <input type="text" class="form-control" id="inputJob" value="Project Manager">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputCompany" class="form-label">Company</label>
        <input type="text" class="form-control" id="inputCompany" value="GitHub Inc">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputPhone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="inputPhone" value="+12486798745">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" value="leo@example.com">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress"
            value="Mountain View, California">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputCountry" class="form-label">Country</label>
        <select class="form-select" id="inputCountry">
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean
                Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
            </option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories
            </option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
            </option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
            </option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic
                Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated
                States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
            </option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia
                and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of
            </option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States" selected>United States</option>
            <option value="United States Minor Outlying Islands">United States Minor
                Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
    </div>
    <div class="col-12 col-md-6">
        <label for="inputYouTube" class="form-label">YouTube</label>
        <input type="text" class="form-control" id="inputYouTube"
            value="https://www.youtube.com/EthanLeo">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputX" class="form-label">X</label>
        <input type="text" class="form-control" id="inputX"
            value="https://twitter.com/EthanLeo">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputFacebook" class="form-label">Facebook</label>
        <input type="text" class="form-control" id="inputFacebook"
            value="https://www.facebook.com/EthanLeo">
    </div>
    <div class="col-12 col-md-6">
        <label for="inputLinkedIn" class="form-label">LinkedIn</label>
        <input type="text" class="form-control" id="inputLinkedIn"
            value="https://www.linkedin.com/EthanLeo">
    </div>
    <div class="col-12">
        <label for="inputAbout" class="form-label">About</label>
        <textarea class="form-control" id="inputAbout">Ethan Leo is a seasoned and results-driven Project Manager who brings experience and expertise to project management. With a proven track record of successfully delivering complex projects on time and within budget, Ethan Leo is the go-to professional for organizations seeking efficient and effective project leadership.</textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form> --}}
