<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upi_id = htmlspecialchars($_POST['upi_id']);
    $email = htmlspecialchars($_POST['email']);
    $referral_link = "https://phon.pe/lskcdmdz";

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Referral Status</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: #f4f4f4;
                overflow-x: hidden;
            }
            .container {
                margin: 20px auto;
                padding: 20px;
                width: 90%;
                max-width: 400px;
                background: #fff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                border-radius: 8px;
                text-align: center;
            }
            h1 {
                color: #6200ea;
            }
            p {
                font-size: 1em;
                margin: 10px 0;
            }
                
            
            .referral-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #e0f7fa;
                color: #00796b;
                padding: 12px;
                border-radius: 5px;
                font-weight: bold;
                margin: 10px 0;
            }
            .referral-link {
                flex: 1;
                text-decoration: none;
                color: inherit;
                word-wrap: break-word;
            }
            .share-icon {
                width: 30px;
                height: 30px;
                background-color: #03a9f4;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                cursor: pointer;
                padding: 5px;
            }
            .share-icon svg {
                width: 16px;
                height: 16px;
            }
            .back-link {
    margin-top: 15px;
    display: block;
    background-color: #6200ea; /* Button color */
    color: white; /* Text color */
    padding: 12px 20px; /* Padding for size */
    text-align: center; /* Center the text */
    border-radius: 8px; /* Rounded corners */
    text-decoration: none; /* Remove underline */
    font-size: 1em; /* Text size */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.back-link:hover {
    background-color: #0288d1; /* Hover color */
}

        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Thank You!</h1>
            <p>Your UPI ID: <strong>$upi_id</strong></p>
            <p>Your Email: <strong>$email</strong></p>

            
            <p class= 'P3'> Share this referral link to earn ₹1000:</p>
            <div class='referral-container'>
                <a href='$referral_link' target='_blank' class='referral-link'>$referral_link</a>
                <div class='share-icon' onclick='shareReferralLink()'>
                    <!-- Custom SVG for the share button -->
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 122.88 114.318' width='16' height='16'>
                        <g>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M122.88,35.289L87.945,70.578v-17.58c-22.091-4.577-39.542,0.468-52.796,17.271 c2.301-34.558,25.907-51.235,52.795-52.339L87.945,0L122.88,35.289L122.88,35.289z'/>
                            <path d='M6.908,23.746h35.626c-4.587,3.96-8.71,8.563-12.264,13.815H13.815v62.943h80.603V85.831l13.814-13.579v35.159 c0,3.814-3.093,6.907-6.907,6.907H6.908c-3.815,0-6.908-3.093-6.908-6.907V30.653C0,26.838,3.093,23.746,6.908,23.746L6.908,23.746 z'/>
                        </g>
                    </svg>
                </div>
            </div>
            <a href='index.html' class='back-link'>Go back</a>
        </div>
        <script>
            function shareReferralLink() {
                if (navigator.share) {
                    navigator.share({
                        title: 'PhonePe Referral',
                        text: 'Join PhonePe and earn ₹1000 for every 5 referrals!',
                        url: '$referral_link'
                    })
                    .then(() => console.log('Thanks for sharing!'))
                    .catch((err) => console.error('Could not share the link', err));
                } else {
                    alert('Sharing is not supported on this browser. Copy and share the link manually.');
                }
            }
        </script>
    </body>
    </html>";
}
?>
