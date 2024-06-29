<?php

require("connection.php");

// $curl = curl_init();



// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://smartbookings.rw/Client-HotelsList/NjQzZjM5MzYzYmFmNQ/1/Find?place=Rwanda&bookingrange=07%252F20%252F2023%2520-%252008%252F21%252F2023&roomnum=1&adult=1&child=0&range=1%253B10000&parkingavailability=true',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_HTTPHEADER => array(
//     'Cookie: PHPSESSID=idtobjqomh0hn56ibji4na68te'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// print $response;

$response = '{
    "message": "Request successfull",
    "data": {
        "facilities": [
            {
                "hotelcode": "5dd507ab89366",
                "hotelname": "Hotel des Mille Collines",
                "banner": "https://smartbookings.rw/gallery/hotels/1579359084.jpg",
                "star": "4",
                "address": "2KN 6th Ave, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "150",
                "currency": "USD ($)",
                "allroom": 112,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 112,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "Welcome to Hotel des Mille Collines\nThe legacy of hospitality in Rwanda for more than 40 years\nInspired by Rwandaâ€™s unforgettable geographical terrain, the hotel derives its name from its motherland known as the â€œland of a thousand hills.â€ Inaugurated in 1973 as the premier grand hotel of the country and becoming a shelter to, a light of hope in the darkness for a terrified crowd of up to 2,000 people who were saved by the hotel opening its doors in 1994 during the Genocide against the Tutsi;\nHÃ´tel des Mille Collines is surely the most famous hotel in Rwanda.\n\nLocated in the central business district, the hotel allows you to enjoy the breathtaking views over the hills of Kigali while indulging in culinary delights from casual to fine dining, international cuisine to local signature dishes! The hotel has also for long been known to promote local artists as well as the Rwandan Culture and produce. This is evident through the display of local art around the hotel which not only beautifies it but generates income for the local artists as the art pieces are sold; A â€˜Cultural Nightâ€™ is held every Friday, dedicated to give its guests a taste of the Rwandan culture through live performances of song and dance; and the hotel uses 90% of local produce!",
                "facilities": [
                    "Languages: English,French,Swahili",
                    "Breakfast: Free Continental,Buffet,Vegetarian,Halal,Gluten-free",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms",
                    "Swimming pool"
                ]
            },
            {
                "hotelcode": "5e199b4c36e77",
                "hotelname": "KIM HOTEL",
                "banner": "https://smartbookings.rw/gallery/hotels/1578737246.jpg",
                "star": "4",
                "address": "KIM Hotel, KG 680 Street, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "80",
                "currency": "USD ($)",
                "allroom": 158,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 158,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "KIM HOTEL opened its doors in SEPTEMBER 2018. With empathy and professional welcoming and treatment of our customers, the hotel provides a comfortable and excellent unique experience to Rwandan hospitality service where it makes all the customers to feel at home in combining luxurious living rooms together with outdoor swimming pool, dining room, and convention areas.At the hotel, w e have Spacious rooms with basic room amenities such as king size beds, high speed internet connection, mini bars, flat screen TV, Air Condition (A/C) ,safe boxes, hair dryers &amp; iron boxes. Our goal is  to provide a unique and standard operating procedures in providing high quality customer service in hospitality industry in Rwanda.\r\nLocated in Kigali, Kim Hotel is 1.5 km from Kigali Centenary Park. Additionally, the hotel has incomparable privilege of having as close neighbors  such as Government Ministries including the Ministry of Foreign Affairs , Ministry of Trade &amp; Industry and other  government agencies such as Rwanda Revenue Authority - RRA,  Rwanda Environment Management Authority â€“ REMA, and Rwandan Development Board â€“ RDB, the agency that hosts all the government development agencies.  \r\nkimhotel has a well didicated team that ensures that you have a memorable time during your stay or visit at kim hotel. Kim Hotel features a restaurant, outdoor swimming pool, a bar and shared lounge in Kigali. Among the facilities at this property are a concierge service and luggage storage space, along with free WiFi throughout the property. The accommodation provides a 24-hour front desk, room service and currency exchange for guest.",
                "facilities": [
                    "Languages: English, French, Kinyarwanda, Swahili",
                    "Breakfast: Free Continental, American, Buffet, A la carte, Full English/Irish, Vegetarian",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms",
                    "Swimming pool",
                    "Sauna (Free)",
                    "Hot tub/Jacuzzi  (Free)"
                ]
            },
            {
                "hotelcode": "5e1c3eb3071fa",
                "hotelname": "Ubumwe Grande Hotel Kigali City Centre",
                "banner": "https://smartbookings.rw/gallery/hotels/1644224271.jpg",
                "star": "4",
                "address": "KN 67 Street, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "130",
                "currency": "USD ($)",
                "allroom": 268,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 268,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "Set in the heart of Kigali City Centre, the Ubumwe Grande Hotel offers easy access to corporate buildings, major businesses and shopping arcades. Enjoy close proximity to nightlife, entertainment and casinos as well as attractions such as the Rwanda Art Museum. Visit the Kigali Genocide Memorial or take a peek inside local arts and crafts shops. Kigali International Airport is just 10.7km from our hotel, with a shuttle service between our hotel and the airport available for a fee. Take the Kigali City Tour to find out more about Rwandaâ€™s Remarkable and fascinating capital city. Our friendly hotel staff will be more than happy to recommend exciting things to do during your stay with us.",
                "facilities": [
                    "Languages: English,French,Swahili",
                    "Breakfast: Free Continental,A la carte",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, private, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms",
                    "Swimming pool"
                ]
            },
            {
                "hotelcode": "5e1438e766435",
                "hotelname": "2000 Hotel Downtown Kigali",
                "banner": "https://smartbookings.rw/gallery/hotels/1579279523.jpg",
                "star": "4",
                "address": "KN 82 St, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "80",
                "currency": "USD ($)",
                "allroom": 458,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 458,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "Known as the highest hotel in Kigali, 2000 Hotel features mountain and city views and a rooftop terrace. Free WiFi is offered throughout the property and free private parking is available on site. There is also a fitness center.\n\nEach room has a flat-screen TV with satellite channels. Certain rooms feature a seating area to relax in after a busy day. Enjoy a cup of coffee or tea while looking out at the mountains or garden. Rooms include a private bathroom fitted with a bath. Extras include bathrobes, slippers and free toiletries.\n\nBamboo Restaurant offers Chinese and Western cuisine. Guests can choose from a large selection of wines in the bamboo bar.\n\nAn on-site fitness center is featured at the 2000 Hotel Kigali and massage facilities are available. A business center is provided for guest convenience. Speaking English, French and Chinese, the 24-hour reception is there to help guests with all their queries.\n\nA shopping mall and supermarket is located on the ground floor. The Central Business District and Kigali City Tower are within a 2-minute walk of this hotel. The Tourist Information Center is a 5-minute walk away.\n\nThe Genocide Memorial is 1.9 mi from the property while Kigali Convention Center is 4.3 mi away. 2000 Hotel Downtown Kigali is located 6.8 mi from Kigali International Airport. The property offers airport shuttle services.\n\nSolo travelers in particular like the location â€“ they rated it 8.3 for a one-person stay.\n\nWe speak your language!",
                "facilities": [
                    "Languages: English,French",
                    "Breakfast: Free Continental,American,Buffet,Vegetarian,Vegan",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, private, on site, require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms"
                ]
            },
            {
                "hotelcode": "5dd3c1d507417",
                "hotelname": "QUIET HAVEN HOTEL",
                "banner": "https://smartbookings.rw/gallery/hotels/1578578717.jpg",
                "star": "3",
                "address": "NYARUTARAMA, KG9,AV62 , Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "70",
                "currency": "USD ($)",
                "allroom": 478,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 478,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "QUIET HAVEN HOTEL is a Three star hotel,located at Nyarutarama-Kigali-Rwanda.\nIt has 17 rooms , one VIP Bar, One beautiful restaurant and one Conference Hall which has a capacity of 60 people.\nQuiet Haven Hotel provides airport pick up to their customers, free WiFi and air condition in all rooms.   \n\nOur location: Kigali , KG 9 , Av62.\nEmail : info@quiethavenhotel.com\nPhone : +250 788 253 776",
                "facilities": [
                    "Languages: English, French, Swahili",
                    "Breakfast: Free Buffet",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms"
                ]
            },
            {
                "hotelcode": "5e158144c15aa",
                "hotelname": "LEGEND HOTEL KIGALI",
                "banner": "https://smartbookings.rw/gallery/hotels/1661261031.jpeg",
                "star": "3",
                "address": "KN 8 Avenue, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "80",
                "currency": "USD ($)",
                "allroom": 500,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 500,
                "summary": "Room available for this period",
                "category": "Boutique Hotel",
                "description": "Legend Hotel is one of Kigali s luxurious boutique hotels conveniently located in Kacyiru, Kigali City, situated next to the American Embassy with fantastic view of the surrounding hills. Legend Hotel offers you a confortable stay in a classy and relaxed atmosphere. the hotel is less than 20 minutes drive to Kigali International Airport and 10 minutes to the City Center.",
                "facilities": [
                    "Languages: French, English, Swahili",
                    "Breakfast: Free Continental, American, Buffet, A la carte, Vegetarian",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms"
                ]
            },
            {
                "hotelcode": "5e15a022a8cc2",
                "hotelname": "IWAWE HOTEL",
                "banner": "https://smartbookings.rw/gallery/hotels/1578650775.jpg",
                "star": "3",
                "address": "Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "100",
                "currency": "USD ($)",
                "allroom": 515,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 515,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "Iwawe Hotel (your home), boasts a total of 15 rooms; 3 Executive suites with a comfortable living room and office, luxury bathroom with both tub and walk-in shower, 8 Single rooms with single beds and walk in shower and 4 Double rooms with deluxe beds, private balcony and walk-in shower.\n\nThe hotel also features 2 conference facilitates, 1 board room that can accommodate up to 20 people, and large conference room that can accommodate a maximum of 50 people.\n\nOur conference packages includes conference standard stationeries, projector &amp; projector screen, coffee/tea breaks, lunch/dinner and sound system.",
                "facilities": [
                    "Languages: English, French, Swahili",
                    "Breakfast: Free Full English/Irish, Continental, Buffet, Vegetarian, American, A la carte",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms"
                ]
            },
            {
                "hotelcode": "5e15aef6d2bab",
                "hotelname": "Lebanon Hotel",
                "banner": "https://smartbookings.rw/gallery/hotels/1578480877.jpg",
                "star": "3",
                "address": "KG 213 Street, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "100",
                "currency": "USD ($)",
                "allroom": 541,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 541,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "Lebanon hotel is a new and cozy hotel in Kigali located less than 10 minutes away from Kigali International Airport and 2 minutes away from Amahoro National Stadium.\n\nThe hotel offers modern accommodations for business and tourist travellers, restaurant, conference facilities, a swimming pool, sauna and massage services. Pick up services from the airport are available upon request.\n\nLebanon Hotel offers a quality dining experience for any occasion at any given time of day. Donâ€™t forget to enjoy your beer/wine in our best panoramic view of Kigali at the Pool Bar.",
                "facilities": [
                    "Languages: English,French,Swahili",
                    "Breakfast: Free Continental,Buffet,Vegetarian",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms",
                    "Swimming pool",
                    "Pool table",
                    "Sauna (Free)"
                ]
            },
            {
                "hotelcode": "5e16554a13f17",
                "hotelname": "SERENE CREST APARTMENTS",
                "banner": "https://smartbookings.rw/gallery/hotels/1578540676.jpg",
                "star": "3",
                "address": "KG 297 Street, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "200",
                "currency": "USD ($)",
                "allroom": 557,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 557,
                "summary": "Room available for this period",
                "category": "Apartment",
                "description": "SERENE CREST offers premium lifestyle residence in a serene suburb with tranquil environment just a heart-beat away from the rapidly growing Kigali City metropolis setting a new high-end living standard in Kibagabaga. Neighborhood appeal includes easy access to key strategic amenity points such as Kibagabaga Hospital, Kigali International Airport, Kigali Golf Course, MTN Shopping Center, Greenhill International School, Kigali City Center, Ecobank, Woodlands Supermarket guarantee residence convenience.\n\nThe apartments lend a beguiling charm to the intricately designed spaces that offer open-plan and contemporary living arrangements of 2 and 3 bed apartments with floor to ceiling windows, avant garde finishes and spectacular sweeping views as some of the features that make SERENE CREST the perfect place to live. The interior finishes specifications create a haven of function, comfort, relaxation and include unobstructed stunning panoramic views of Kigali City. The on-site mini gym and swimming pool amenities make SERENE CREST the perfect living sanctuary.",
                "facilities": [
                    "Languages: English,French,Swahili",
                    "Breakfast: Free Continental,American,Buffet,Vegetarian",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Family rooms",
                    "Swimming pool"
                ]
            },
            {
                "hotelcode": "5e16ef15ad031",
                "hotelname": "THE MIRROR HOTEL",
                "banner": "https://smartbookings.rw/gallery/hotels/1578930229.jpg",
                "star": "3",
                "address": "KN 5 Road, Kigali, Rwanda",
                "city": "Kigali, Rwanda",
                "country": "Rwanda",
                "minprice": "70",
                "currency": "USD ($)",
                "allroom": 614,
                "takeroom": 0,
                "requestedroom": "1",
                "available": 614,
                "summary": "Room available for this period",
                "category": "Hotel",
                "description": "he Mirror Hotel is a three star (3***) with 60 bedrooms, offers the best value for quality accommodation. Perfect for families, leisure or business our hotels are located in the very quiet city centre, accessible location and picturesque countryside. The Mirror Hotel locate In The Heart Of Remera, Just On KN 5RD Near Kisimenti Roundabout. It Is 5 Minutes Driving From Kigali International Airport, 5 Minutes Driving From Kigali Convention Center And 10 Minutes From Kigali City Center. It Allows Guests to Experience the Vibrant Rwandan Culture And City Ambiance. Donâ€™t forget our hotel provide FREE Wi-Fi access for residents so you can always keep in touch with business or family and friends while you enjoy your stay with us.",
                "facilities": [
                    "Languages: English, French, Swahili",
                    "Breakfast: Free Continental, American, Buffet, A la carte, Vegetarian, Full English/Irish",
                    "Internet: wireless in entire property (Free)",
                    "Parking : Free, public, on site, does not require reservation",
                    "Bar",
                    "Air Conditioner (Free)",
                    "Garden",
                    "Terrace",
                    "Non-smoking rooms",
                    "Swimming pool",
                    "Pool table",
                    "Sauna (Free)"
                ]
            }
        ],
        "map-data": [
            {
                "addr": "Hotel des Mille Collines Rwanda",
                "name": "Hotel des Mille Collines",
                "star": "4",
                "cover": "https://smartbookings.rw/gallery/hotels/1579359084.jpg",
                "hotcode": "5dd507ab89366"
            },
            {
                "addr": "KIM HOTEL Rwanda",
                "name": "KIM HOTEL",
                "star": "4",
                "cover": "https://smartbookings.rw/gallery/hotels/1578737246.jpg",
                "hotcode": "5e199b4c36e77"
            },
            {
                "addr": "Ubumwe Grande Hotel Kigali City Centre Rwanda",
                "name": "Ubumwe Grande Hotel Kigali City Centre",
                "star": "4",
                "cover": "https://smartbookings.rw/gallery/hotels/1644224271.jpg",
                "hotcode": "5e1c3eb3071fa"
            },
            {
                "addr": "2000 Hotel Downtown Kigali Rwanda",
                "name": "2000 Hotel Downtown Kigali",
                "star": "4",
                "cover": "https://smartbookings.rw/gallery/hotels/1579279523.jpg",
                "hotcode": "5e1438e766435"
            },
            {
                "addr": "QUIET HAVEN HOTEL Rwanda",
                "name": "QUIET HAVEN HOTEL",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1578578717.jpg",
                "hotcode": "5dd3c1d507417"
            },
            {
                "addr": "LEGEND HOTEL KIGALI Rwanda",
                "name": "LEGEND HOTEL KIGALI",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1661261031.jpeg",
                "hotcode": "5e158144c15aa"
            },
            {
                "addr": "IWAWE HOTEL Rwanda",
                "name": "IWAWE HOTEL",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1578650775.jpg",
                "hotcode": "5e15a022a8cc2"
            },
            {
                "addr": "Lebanon Hotel Rwanda",
                "name": "Lebanon Hotel",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1578480877.jpg",
                "hotcode": "5e15aef6d2bab"
            },
            {
                "addr": "SERENE CREST APARTMENTS Rwanda",
                "name": "SERENE CREST APARTMENTS",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1578540676.jpg",
                "hotcode": "5e16554a13f17"
            },
            {
                "addr": "THE MIRROR HOTEL Rwanda",
                "name": "THE MIRROR HOTEL",
                "star": "3",
                "cover": "https://smartbookings.rw/gallery/hotels/1578930229.jpg",
                "hotcode": "5e16ef15ad031"
            }
        ]
    },
    "total": 21,
    "per_page": 10,
    "current_page": "1",
    "last_page": 3
}';

$response = json_decode($response, true);

if ($response !== null) {

    // JSON decoding was successful
    $message = $response['message'];
    $facilities = $response['data']['facilities'];

    // Access the decoded data
    // echo "Message: $message\n\n";

    foreach ($facilities as $facility) {

        $name = $facility['hotelname'];
        $code = $facility['hotelcode'];
        $address = $facility['address'];
        $price = $facility['minprice'];
        $picture = $facility['banner'];
        $rating = $facility['star'];
        $hotelDescription = $facility['description'];

        mysqli_query($connection, "INSERT INTO `hotels` (`hotel_id`, `hotel_code`, `hotel_name`, `hotel_about`, `hotel_minimum_price`, `hotel_phone`, `hotel_email`, `hotel_website`, `hotel_image`, `hotel_rating`, `hotel_reviews`, `hotel_address`, `hotel_coordinates`, `services`, `working_hours`, `hotel_status`) 
       VALUES (NULL, '$code', '$name', '$hotelDescription', '$price', '0788606765', 'hotel@tarama.ai', '', '$picture',  '$rating', NULL, '$address', '', '', '', 'pending')
       ") or die(mysqli_error($connection));
    }

    echo "Done.";
} else {
    // JSON decoding failed
    echo "Failed to decode JSON response.";
}
