<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href = "styleproject.css">
    <title>Kortitrak: Register</title>
</head>
<body>

  
    <form method="post">
    <div class = "userCategory">
     
     <label>
     <input type="radio" name="Lawyer" value= "lawyer" id="lawyer" onclick="showFields('lawyer');" required> Lawyer Registration
     </label>
 
     <label>
     <input type="radio" name="Client" value= "client" id="client" onclick="showFields('client');" required> Client Registration
     </label>
     
     </div>

   <div id = "lawyerFields">

    <label>Lawyer ID: </label>
     <input type="text" name= "lawyerid" placeholder= "Lawyer ID No." id= "lawyerId" required><br> 

     <label>Law Firm Name: </label>
     <input type="text" name= "firmname" placeholder= "Law Firm Name" id= "firmName" required><br> 

     <label>Law Firm Registration Number:</label>
     <input type="text" name= "firmnumber" placeholder= "Law Firm Number" id= "firmNumber" required><br> 

     <label>Lawyer Name:</label>
     <input type="text" name= "lawyername" placeholder= "Lawyer Full Name" id= "lawyerName" required><br>
     
     <label>Mobile Number: </label>
     <input type="text" name= "mobilenumber" placeholder= "Mobile Number " id= "mobilenumber" required><br> 

     <label>Email Address</label>
     <input type="email" name= "emailaddress" placeholder= "Enter your email address" id= "emailaddress" required><br> 

     <label>Password</label>
     <input type="password" name= "password" placeholder= "Enter your password" id= "password" required><br> 

     <label>Confirm Password</label>
     <input type="password" name= "passwordConfirm" placeholder= "Confirm your password" id= "passwordConfirm" required><br> 


   </div>

   <div id= "clientFields" style="display: none;">
  
   <label>First Name as per your ID:</label>
     <input type="text" name= "firstname" placeholder= "First Name" id= "firstName" required><br> 

     <label>Last Name: </label>
     <input type="text" name= "lastname" placeholder= "Last Name" id= "lastName" required><br> 

     <label>ID Number:</label>
     <input type="text" name= "idnumber" placeholder= "ID Number" id= "idNumber" required><br> 

     <label>Date of Birth: </label><br>
     <input type="date" name= "dateOfBirth" id= "dateofbirth" required><br> 
    
     <label>Nationality:</label>
    
     <select name= "nationality" id= "nationality" placeholder="Select your nationality" required>
     <option value="select">Select your nationality</option>
      <option value="Abkhazian">Abkhazian</option>
      <option value="Afghan">Afghan</option>
      <option value="Abkhazian">Abkhazian</option>
      <option value="American Samoan">American Samoan</option>
      <option value="Albanian">Albanian</option>
      <option value="Algerian">Algerian</option>
      <option value="Andorran">Andorran</option>
      <option value="Angolan">Angolan</option>
      <option value="Anguillan">Anguillan</option>
      <option value="Antiguan">Antiguan</option>
      <option value="Argentinian">Argentinian</option>
      <option value="Armenian">Armenian</option>
      <option value="Aruban">Aruban</option>
      <option value="Australian">Australian</option>
      <option value="Austrian">Austrian</option>
      <option value="Azerbaijani">Azerbaijani</option>
      <option value="Bahamian">Bahamian</option>
      <option value="Bahraini">Bahraini</option>
      <option value="Bangladeshi">Bangladeshi</option>
      <option value="Barbadian">Barbadian</option>
      <option value="Belarusian">Belarusian</option>
      <option value="Belgian">Belgian</option>
      <option value="Belizean">Belizean</option>
      <option value="Beninese">Beninese</option>
      <option value="Bermudan">Bermudan</option>
      <option value="Bhutanese">Bhutanese</option>
      <option value="Bolivian">Bolivian</option>
      <option value="Bosnian / Herzegovinian">Bosnian / Herzegovinian</option>
      <option value="Botswanan">Botswanan</option>
      <option value="Brazilian">Brazilian</option>
      <option value="British (United Kingdom)">British (United Kingdom)</option>
      <option value="British Virgin Islander">British Virgin Islander</option>
      <option value="Bruneian">Bruneian</option>
      <option value="Bulgarian">Bulgarian</option>
      <option value="Burkinabè">Burkinabè</option>
      <option value="Burmese">Burmese</option>
      <option value="Burundian">Burundian</option>
      <option value="Cambodian">Cambodian</option>
      <option value="Cameroonian">Cameroonian</option>
      <option value="Canadian">Canadian</option>
      <option value="Cape Verdean">Cape Verdean</option>
      <option value="Caymanian">Caymanian</option>
      <option value="Central African">Central African</option>
      <option value="Chadian">Chadian</option>
      <option value="Chilean">Chilean</option>
      <option value="Chinese">Chinese</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos Island">Cocos Island</option>
      <option value="Colombian">Colombian</option>
      <option value="Comorian">Comorian</option>
      <option value="Congolese (Dem. Rep)">Congolese (Dem. Rep)</option>
      <option value="Congolese (Rep.)">Congolese (Rep.)</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rican">Costa Rican</option>
      <option value="Ivorian">Ivorian (Côte d'Ivoire)</option>
      <option value="Croatian">Croatian</option>
      <option value="Cuban">Cuban</option>
      <option value="Cypriot">Cypriot</option>
      <option value="Czech">Czech</option>
      <option value="Danish">Danish</option>
      <option value="Djiboutian">Djiboutian</option>
      <option value="Dominican">Dominican</option>
      <option value="Egyptian">Egyptian</option>
      <option value="Salvadoran (El Salvador)">Salvadoran (El Salvador)</option>
      <option value="Emirati(United Arab Emirates)">Emirati(United Arab Emirates)</option>
      <option value="English">English</option>
      <option value="Equatorial Guinean">Equatorial Guinean</option>
      <option value="Eritrean">Eritrean</option>
      <option value="Estonian">Estonian</option>
      <option value="Ethopian">Ethiopian</option>
      <option value="Falkland Island">Falkland Island</option>
      <option value="Faroese">Faroese</option>
      <option value="Fijian">Fijian</option>
      <option value="Finnish">Finnish</option>
      <option value="French">French</option>
      <option value="French Guianese">French Guianese</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="Gabonese">Gabonese</option>
      <option value="Gambian">Gambian</option>
      <option value="Georgian">Georgian</option>
      <option value="German">German</option>
      <option value="Ghanian">Ghanian</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greek">Greek</option>
      <option value="Greenland">Greenlandic</option>
      <option value="Guadaloupe">Guadeloupe</option>
      <option value="Guamian">Guamian</option>
      <option value="Guatemalan">Guatemalan</option>
      <option value="Guinean">Guinean</option>
      <option value="Guinea-Bissauan">Guinea-Bissauan</option>
      <option value="Guyanese">Guyanese</option>
      <option value="Haitian">Haitian</option>
      <option value="Honduran">Honduran</option>
      <option value="Hong Kong, Hongkongese">Hong Kong, Hongkongese</option>
      <option value="Hungarian">Hungarian</option>
      <option value="Icelandic">Icelandic</option>
      <option value="Indian">Indian</option>
      <option value="Indonesian">Indonesian</option>
      <option value="Iranian">Iranian</option>
      <option value="Iraqi">Iraqi</option>
      <option value="Irish">Irish</option>
      <option value="Israeli">Israeli</option>
      <option value="Italian">Italian</option>
      <option value="Jamaican">Jamaican</option>
      <option value="Japanese">Japanese</option>
      <option value="Jordanian">Jordanian</option>
      <option value="Kazakh">Kazakh</option>
      <option value="Kenyan">Kenyan</option>
      <option value="I-Kiribati">I-Kiribati</option>
      <option value="North Korean">North Korean</option>
      <option value="South Korean">South Korean</option>
      <option value="Kosovar">Kosovar</option>
      <option value="Kuwaiti">Kuwaiti</option>
      <option value="Kyrgyzstani">Kyrgyzstani</option>
      <option value="Laotian">Laotian</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanese">Lebanese</option>
      <option value="Basotho (Lesotho)">Basotho (Lesotho)</option>
      <option value="Liberian">Liberian</option>
      <option value="Libyan">Libyan</option>
      <option value="Lichtenstein">Liechtenstein</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macanese">Macanese</option>
      <option value="Macedonian">Macedonian</option>
      <option value="Malagasy (Madagascar)">Malagasy (Madagascar)</option>
      <option value="Malawian">Malawian</option>
      <option value="Malaysian">Malaysian</option>
      <option value="Maldivian">Maldivian</option>
      <option value="Malian">Malian</option>
      <option value="Maltese">Maltese</option>
      <option value="Marshallese (Marshall Islands)">Marshallese (Marshall Islands)</option>
      <option value="Martiniquais (Martinique)">Martiniquais (Martinique)</option>
      <option value="Mauritanian">Mauritanian</option>
      <option value="Mauritian">Mauritian</option>
      <option value="Mahoran">Mahoran</option>
      <option value="Mexican">Mexican</option>
      <option value="Micronesian">Micronesian</option>
      <option value="Moldova">Moldovan</option>
      <option value="Monacan">Monacan</option>
      <option value="Mongolian">Mongolian</option>
      <option value="Montenegrin">Montenegrin</option>
      <option value="Monserratian">Monserratian</option>
      <option value="Morrocan">Morrocan</option>
      <option value="Mozambican">Mozambican</option>
      <option value="Namibian">Namibian</option>
      <option value="Nauruan">Nauruan</option>
      <option value="Nepalese">Nepalese</option>
      <option value="Dutch (Netherlands)">Dutch (Netherlands)</option>
      <option value="New Caledonian">New Caledonian</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Niuean (Niue)">Niuean (Niue)</option>
      <option value="Nigerian">Nigerian</option>
      <option value="Norwegian">Norwegian</option>
      <option value="Northern Irish">Northern Irish</option>
      <option value="Northern Marianan">Northern Marianan</option>
      <option value="Omani">Omani</option>
      <option value="Pakistani">Pakistani</option>
      <option value="Palestinian">Palestinian</option>
      <option value="Palauan">Palauan</option>
      <option value="Panamian">Panamian</option>
      <option value="Papua New Guinean">Papua New Guinean</option>
      <option value="Paraguayan">Paraguayan</option>
      <option value="Peruvian">Peruvian</option>
      <option value="Filipino (Philippines)">Filipino (Philippines)</option>
      <option value="Piticarin Island">Piticarin Island</option>
      <option value="Polish">Polish</option>
      <option value="Portuguese">Portuguese</option>
      <option value="Puerto Rican">Puerto Rican</option>
      <option value="Qatari">Qatari</option>
      <option value="Reunionese">Reunionese</option>
      <option value="Romanian">Romanian</option>
      <option value="Russian">Russian</option>
      <option value="Rwandan">Rwandanan</option>
      <option value="St. Helenian">St. Helenian</option>
      <option value="Kittitian / Nevisian (Saint Kitts and Nevis)">Kittitian / Nevisian (Saint Kitts and Nevis) </option>
      <option value="St. Lucian">St. Lucian</option>
      <option value="Saint-Pierrais / Miquelonnais">Saint-Pierrais / Miquelonnais (Saint Pierre and Miquelon)</option>
      <option value="St. Vincentian">St. Vincentian</option>
      <option value="Samoan">Samoan</option>
      <option value="Sammarinese">Sammarinese</option>
      <option value="Sao Tomèan">Sao Tomèan</option>
      <option value="Saudi Arabian">Saudi Arabian</option>
      <option value="Scottish">Scottish</option>
      <option value="Senegalese">Senegalese</option>
      <option value="Serbian">Serbian</option>
      <option value="Seychellois">Seychellois</option>
      <option value="Sierra Leonean">Sierra Leonean</option>
      <option value="Singaporean">Singaporean</option>
      <option value="Slovak">Slovak</option>
      <option value="Slovenian">Slovenian</option>
      <option value="Solomon Island">Solomon Island</option>
      <option value="Somali">Somali</option>
      <option value="South African">South African</option>
      <option value="South Ossetian">South Ossetian</option>
      <option value="South Sudanese">South Sudanese</option>
      <option value="Spanish">Spanish</option>
      <option value="Sri Lankan">Sri Lankan</option>
      <option value="Sudanese">Sudanese</option>
      <option value="Surinamese">Surinamese</option>
      <option value="Swazi">Swazi</option>
      <option value="Swedish">Swedish</option>
      <option value="Swiss">Swiss</option>
      <option value="Syrian">Syrian</option>
      <option value="Taiwanese">Taiwanese</option>
      <option value="Tajikistani">Tajikistani</option>
      <option value="Tanzanian">Tanzanian</option>
      <option value="Thai">Thai</option>
      <option value="Togolese">Togolese</option>
      <option value="Tongan">Tongan</option>
      <option value="Trinidad / Tobagonian (Trinidad and Tobago)">Trinidad / Tobagonian (Trinidad and Tobago)</option>
      <option value="Tunisian">Tunisian</option>
      <option value="Turkish">Turkish</option>
      <option value="Turkmen (Turkmenistan)">Turkmen (Turkmenistan)</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvaluan">Tuvaluan</option>
      <option value="Ugandan">Ugandan</option>
      <option value="Ukrainian">Ukrainian</option>
      <option value="Uruguayan">Uruguayan</option>
      <option value="Uzbek">Uzbek</option>
      <option value="Vanatuan">Vanatuan</option>
      <option value="Venezuelan">Venezuelan</option>
      <option value="Vietnamese">Vietnamese</option>
      <option value="Virgin Island">Virgin Island</option>
      <option value="Welsh">Welsh</option>
      <option value="Wallisian / Futunan">Wallisian / Futunan (Wallis and Futuna)</option>
      <option value="Sahrawian">Sahrawian</option>
      <option value="Yemeni">Yemeni</option>
      <option value="Zambian">Zambian</option>
      <option value="Zimbabwean">Zimbabwean</option>
      <option value="Multinational">Multinational</option>
    
    </select>
    
     <label>Gender</label>
     <select name= "gender" id= "gender" required>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
     </select>
     <input type="text" name= "otherGender" placeholder="If chosen 'Other' please specify"><br>
     
     <label>Persons With Disabilities(PWD):</label>
     <select name= "personswithdisabilities" id= "personsWithDisabilities" required>
       <option>Yes</option>
       <option>No</option>
     </select>
     <input type="text" placeholder="If chosen 'Yes' please specify"><br>

     <label>Mobile Number: </label>
     <input type="text" name= "mobilenumber" placeholder= "Mobile Number " id= "mobilenumber" required><br> 

     <label>Email Address</label>
     <input type="email" name= "emailaddress" placeholder= "Enter your email address" id= "emailaddress" required><br> 

     <label>Password</label>
     <input type="password" name= "password" placeholder= "Enter your password" id= "password" required><br> 

     <label>Confirm Password</label>
     <input type="password" name= "passwordConfirm" placeholder= "Confirm your password" id= "passwordConfirm" required><br> 

   </div>
     <input type="button" name= "submit" value="Submit" onclick= "return validateLoginForm();" id= "submit-button"><br> 

</form>

  
    
</body>
</html>