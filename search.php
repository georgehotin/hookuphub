<?php
// Get the state and city values from the query parameters
$state = $_GET["state"];
$city = $_GET["city"];

// Map the state and city to the correct format for the URL
$stateCities = [
   "1": ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Meerut", "Varanasi"], // Uttar Pradesh
    "2": ["Mumbai", "Pune", "Nagpur", "Thane", "Nashik", "Aurangabad"], // Maharashtra
    "3": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia", "Darbhanga"], // Bihar
    "4": ["Kolkata", "Howrah", "Durgapur", "Asansol", "Siliguri", "Bardhaman"], // West Bengal
    "5": ["Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain", "Sagar"], // Madhya Pradesh
    "6": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem", "Tiruppur"], // Tamil Nadu
    "7": ["Jaipur", "Jodhpur", "Kota", "Bikaner", "Ajmer", "Udaipur"], // Rajasthan
    "8": ["Bengaluru", "Mysuru", "Hubballi-Dharwad", "Mangaluru", "Belagavi", "Davangere"], // Karnataka
    "9": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar"], // Gujarat
    "10": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Rajahmundry"], // Andhra Pradesh
    "11": ["Bhubaneswar", "Cuttack", "Rourkela", "Berhampur", "Sambalpur", "Puri"], // Odisha
    "12": ["Hyderabad", "Warangal", "Nizamabad", "Khammam", "Karimnagar", "Ramagundam"], // Telangana
    "13": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Kollam", "Thrissur", "Alappuzha"], // Kerala
    "14": ["Ranchi", "Dhanbad", "Jamshedpur", "Bokaro", "Deoghar", "Hazaribagh"], // Jharkhand
    "15": ["Guwahati", "Silchar", "Dibrugarh", "Nagaon", "Tinsukia", "Jorhat"], // Assam
    "16": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Hoshiarpur"], // Punjab
    "17": ["Raipur", "Bhilai", "Bilaspur", "Korba", "Durg", "Rajnandgaon"], // Chhattisgarh
    "18": ["Faridabad", "Gurugram", "Panipat", "Ambala", "Yamunanagar", "Rohtak"], // Haryana
    "19": ["Dehradun", "Haridwar", "Roorkee", "Haldwani", "Rudrapur", "Kashipur"], // Uttarakhand
    "20": ["Shimla", "Dharamshala", "Solan", "Mandi", "Palampur", "Baddi"], // Himachal Pradesh
    "21": ["Agartala", "Udaipur", "Dharmanagar", "Kailashahar", "Belonia", "Khowai"], // Tripura
    "22": ["Shillong", "Tura", "Nongstoin", "Jowai", "Baghmara", "Williamnagar"], // Meghalaya
    "23": ["Imphal", "Thoubal", "Bishnupur", "Churachandpur", "Ukhrul", "Senapati"], // Manipur
    "24": ["Dimapur", "Kohima", "Mokokchung", "Tuensang", "Wokha", "Zunheboto"], // Nagaland
    "25": ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda", "Bicholim"], // Goa
    "26": ["Itanagar", "Naharlagun", "Pasighat", "Roing", "Ziro", "Tawang"], // Arunachal Pradesh
    "27": ["Aizawl", "Lunglei", "Saiha", "Champhai", "Serchhip", "Kolasib"], // Mizoram
    "28": ["Gangtok", "Namchi", "Gyalshing", "Mangan", "Rangpo", "Jorethang"], // Sikkim
    "29": ["New Delhi", "Delhi Cantonment", "Daryaganj", "Karol Bagh", "Chandni Chowk", "Connaught Place"] // Delhi
    // Add other state-city mappings here
];

$cityFormatted = $city; // Default to the selected city
if (isset($stateCities[$state])) {
    $cities = $stateCities[$state];
    if (in_array($city, $cities)) {
        $cityFormatted = $city;
    }
}

// Construct the URL for the target HTML file
$searchUrl = "https://hookuphubs.com/escorts/" . strtolower($cityFormatted) . "/call-girls.html"; 

// Redirect the client's browser to the generated URL
header("Location: " . $searchUrl); 
exit; // Stop further execution
?>
