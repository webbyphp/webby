<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= 'Custom Error Page' . ' | ' . config_item('app_name') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="<?= APP_BASE_URL . 'assets/tailwind.css?plugins=typography' ?>"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        webby: "#6d00cc",
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer components {

            .bg-primary {
                @apply bg-gradient-to-br
                from-purple-100 
                to-pink-100 
                via-cyan-100;
            }

			.w-svg {
				@apply md-0
			}
        }

		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .floating {
            animation: float 4s ease-in-out infinite;
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .fade-in-delay-1 {
            opacity: 0;
            animation: fadeIn 0.6s ease-out 0.2s forwards;
        }

        .fade-in-delay-2 {
            opacity: 0;
            animation: fadeIn 0.6s ease-out 0.4s forwards;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .number-404 {
            font-size: 12rem;
            line-height: 1;
            font-weight: 800;
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.05em;
        }

        @media (max-width: 768px) {
            .number-404 {
                font-size: 8rem;
            }
        }

        .suggestion-card {
            transition: all 0.2s ease;
        }

        .suggestion-card:hover {
            transform: translateX(4px);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-50 via-pink-50 to-blue-50 text-gray-900 min-h-screen flex items-center justify-center p-4">
    <!-- <body class="bg-gradient-to-br from-purple-50 via-pink-50 to-blue-50 text-gray-900 min-h-screen flex items-center justify-center p-4"> -->
    <div class="max-w-3xl w-full">
        <div class="text-center mb-12">

            <div class="mb-8 inline-block floating">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" zoomAndPan="magnify" viewBox="0 0 375 374.999991" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <filter x="0%" y="0%" width="100%" height="100%" id="14f16c6a34">
                            <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" color-interpolation-filters="sRGB" />
                        </filter>
                        <g />
                        <clipPath id="84a6fdf38d">
                            <path d="M 0 0 L 375 0 L 375 375 L 0 375 Z M 0 0 " clip-rule="nonzero" />
                        </clipPath>
                        <linearGradient x1="-10.420875" gradientTransform="matrix(2.107447, 0, 0, 2.109136, 21.869593, -17.390858)" y1="8.289075" x2="167.447756" gradientUnits="userSpaceOnUse" y2="186.15879" id="336d1348f6">
                            <stop stop-opacity="1" stop-color="rgb(90.19928%, 28.62854%, 61.959839%)" offset="0" />
                            <stop stop-opacity="1" stop-color="rgb(90.19928%, 28.62854%, 61.959839%)" offset="0.03125" />
                            <stop stop-opacity="1" stop-color="rgb(90.155029%, 28.637695%, 62.001038%)" offset="0.046875" />
                            <stop stop-opacity="1" stop-color="rgb(89.884949%, 28.691101%, 62.258911%)" offset="0.0507813" />
                            <stop stop-opacity="1" stop-color="rgb(89.660645%, 28.736877%, 62.47406%)" offset="0.0546875" />
                            <stop stop-opacity="1" stop-color="rgb(89.434814%, 28.781128%, 62.689209%)" offset="0.0585938" />
                            <stop stop-opacity="1" stop-color="rgb(89.208984%, 28.826904%, 62.905884%)" offset="0.0625" />
                            <stop stop-opacity="1" stop-color="rgb(88.983154%, 28.871155%, 63.121033%)" offset="0.0664062" />
                            <stop stop-opacity="1" stop-color="rgb(88.757324%, 28.916931%, 63.336182%)" offset="0.0703125" />
                            <stop stop-opacity="1" stop-color="rgb(88.531494%, 28.962708%, 63.551331%)" offset="0.0742188" />
                            <stop stop-opacity="1" stop-color="rgb(88.30719%, 29.008484%, 63.766479%)" offset="0.078125" />
                            <stop stop-opacity="1" stop-color="rgb(88.08136%, 29.052734%, 63.981628%)" offset="0.0820312" />
                            <stop stop-opacity="1" stop-color="rgb(87.85553%, 29.098511%, 64.198303%)" offset="0.0859375" />
                            <stop stop-opacity="1" stop-color="rgb(87.6297%, 29.142761%, 64.413452%)" offset="0.0898438" />
                            <stop stop-opacity="1" stop-color="rgb(87.405396%, 29.188538%, 64.628601%)" offset="0.09375" />
                            <stop stop-opacity="1" stop-color="rgb(87.179565%, 29.232788%, 64.84375%)" offset="0.0976562" />
                            <stop stop-opacity="1" stop-color="rgb(86.953735%, 29.278564%, 65.058899%)" offset="0.101563" />
                            <stop stop-opacity="1" stop-color="rgb(86.727905%, 29.322815%, 65.274048%)" offset="0.105469" />
                            <stop stop-opacity="1" stop-color="rgb(86.502075%, 29.368591%, 65.490723%)" offset="0.109375" />
                            <stop stop-opacity="1" stop-color="rgb(86.276245%, 29.412842%, 65.705872%)" offset="0.113281" />
                            <stop stop-opacity="1" stop-color="rgb(86.051941%, 29.458618%, 65.921021%)" offset="0.117188" />
                            <stop stop-opacity="1" stop-color="rgb(85.826111%, 29.502869%, 66.136169%)" offset="0.121094" />
                            <stop stop-opacity="1" stop-color="rgb(85.600281%, 29.548645%, 66.352844%)" offset="0.125" />
                            <stop stop-opacity="1" stop-color="rgb(85.374451%, 29.592896%, 66.567993%)" offset="0.128906" />
                            <stop stop-opacity="1" stop-color="rgb(85.150146%, 29.638672%, 66.783142%)" offset="0.132812" />
                            <stop stop-opacity="1" stop-color="rgb(84.924316%, 29.682922%, 66.998291%)" offset="0.136719" />
                            <stop stop-opacity="1" stop-color="rgb(84.698486%, 29.728699%, 67.21344%)" offset="0.140625" />
                            <stop stop-opacity="1" stop-color="rgb(84.472656%, 29.774475%, 67.428589%)" offset="0.144531" />
                            <stop stop-opacity="1" stop-color="rgb(84.246826%, 29.820251%, 67.645264%)" offset="0.148438" />
                            <stop stop-opacity="1" stop-color="rgb(84.020996%, 29.864502%, 67.860413%)" offset="0.152344" />
                            <stop stop-opacity="1" stop-color="rgb(83.796692%, 29.910278%, 68.075562%)" offset="0.15625" />
                            <stop stop-opacity="1" stop-color="rgb(83.570862%, 29.954529%, 68.29071%)" offset="0.160156" />
                            <stop stop-opacity="1" stop-color="rgb(83.345032%, 30.000305%, 68.505859%)" offset="0.164063" />
                            <stop stop-opacity="1" stop-color="rgb(83.119202%, 30.044556%, 68.721008%)" offset="0.167969" />
                            <stop stop-opacity="1" stop-color="rgb(82.893372%, 30.090332%, 68.937683%)" offset="0.171875" />
                            <stop stop-opacity="1" stop-color="rgb(82.667542%, 30.134583%, 69.152832%)" offset="0.175781" />
                            <stop stop-opacity="1" stop-color="rgb(82.443237%, 30.180359%, 69.367981%)" offset="0.179688" />
                            <stop stop-opacity="1" stop-color="rgb(82.217407%, 30.224609%, 69.58313%)" offset="0.183594" />
                            <stop stop-opacity="1" stop-color="rgb(81.991577%, 30.270386%, 69.799805%)" offset="0.1875" />
                            <stop stop-opacity="1" stop-color="rgb(81.765747%, 30.314636%, 70.014954%)" offset="0.191406" />
                            <stop stop-opacity="1" stop-color="rgb(81.541443%, 30.360413%, 70.230103%)" offset="0.195313" />
                            <stop stop-opacity="1" stop-color="rgb(81.315613%, 30.404663%, 70.445251%)" offset="0.199219" />
                            <stop stop-opacity="1" stop-color="rgb(81.089783%, 30.450439%, 70.6604%)" offset="0.203125" />
                            <stop stop-opacity="1" stop-color="rgb(80.863953%, 30.496216%, 70.875549%)" offset="0.207031" />
                            <stop stop-opacity="1" stop-color="rgb(80.638123%, 30.541992%, 71.092224%)" offset="0.210938" />
                            <stop stop-opacity="1" stop-color="rgb(80.412292%, 30.586243%, 71.307373%)" offset="0.214844" />
                            <stop stop-opacity="1" stop-color="rgb(80.187988%, 30.632019%, 71.522522%)" offset="0.21875" />
                            <stop stop-opacity="1" stop-color="rgb(79.962158%, 30.67627%, 71.737671%)" offset="0.222656" />
                            <stop stop-opacity="1" stop-color="rgb(79.736328%, 30.722046%, 71.95282%)" offset="0.226563" />
                            <stop stop-opacity="1" stop-color="rgb(79.510498%, 30.766296%, 72.167969%)" offset="0.230469" />
                            <stop stop-opacity="1" stop-color="rgb(79.286194%, 30.812073%, 72.384644%)" offset="0.234375" />
                            <stop stop-opacity="1" stop-color="rgb(79.060364%, 30.856323%, 72.599792%)" offset="0.238281" />
                            <stop stop-opacity="1" stop-color="rgb(78.834534%, 30.9021%, 72.814941%)" offset="0.242188" />
                            <stop stop-opacity="1" stop-color="rgb(78.608704%, 30.94635%, 73.03009%)" offset="0.246094" />
                            <stop stop-opacity="1" stop-color="rgb(78.382874%, 30.992126%, 73.246765%)" offset="0.25" />
                            <stop stop-opacity="1" stop-color="rgb(78.157043%, 31.036377%, 73.461914%)" offset="0.253906" />
                            <stop stop-opacity="1" stop-color="rgb(77.932739%, 31.082153%, 73.677063%)" offset="0.257812" />
                            <stop stop-opacity="1" stop-color="rgb(77.706909%, 31.126404%, 73.892212%)" offset="0.261719" />
                            <stop stop-opacity="1" stop-color="rgb(77.481079%, 31.17218%, 74.107361%)" offset="0.265625" />
                            <stop stop-opacity="1" stop-color="rgb(77.255249%, 31.217957%, 74.32251%)" offset="0.269531" />
                            <stop stop-opacity="1" stop-color="rgb(77.030945%, 31.263733%, 74.539185%)" offset="0.273438" />
                            <stop stop-opacity="1" stop-color="rgb(76.805115%, 31.307983%, 74.754333%)" offset="0.277344" />
                            <stop stop-opacity="1" stop-color="rgb(76.579285%, 31.35376%, 74.969482%)" offset="0.28125" />
                            <stop stop-opacity="1" stop-color="rgb(76.353455%, 31.39801%, 75.184631%)" offset="0.285156" />
                            <stop stop-opacity="1" stop-color="rgb(76.127625%, 31.443787%, 75.39978%)" offset="0.289062" />
                            <stop stop-opacity="1" stop-color="rgb(75.901794%, 31.488037%, 75.614929%)" offset="0.292969" />
                            <stop stop-opacity="1" stop-color="rgb(75.67749%, 31.533813%, 75.831604%)" offset="0.296875" />
                            <stop stop-opacity="1" stop-color="rgb(75.45166%, 31.578064%, 76.046753%)" offset="0.300781" />
                            <stop stop-opacity="1" stop-color="rgb(75.22583%, 31.62384%, 76.261902%)" offset="0.304688" />
                            <stop stop-opacity="1" stop-color="rgb(75%, 31.668091%, 76.477051%)" offset="0.308594" />
                            <stop stop-opacity="1" stop-color="rgb(74.775696%, 31.713867%, 76.693726%)" offset="0.3125" />
                            <stop stop-opacity="1" stop-color="rgb(74.549866%, 31.758118%, 76.908875%)" offset="0.316406" />
                            <stop stop-opacity="1" stop-color="rgb(74.324036%, 31.803894%, 77.124023%)" offset="0.320312" />
                            <stop stop-opacity="1" stop-color="rgb(74.098206%, 31.848145%, 77.339172%)" offset="0.324219" />
                            <stop stop-opacity="1" stop-color="rgb(73.872375%, 31.893921%, 77.554321%)" offset="0.328125" />
                            <stop stop-opacity="1" stop-color="rgb(73.646545%, 31.938171%, 77.76947%)" offset="0.332031" />
                            <stop stop-opacity="1" stop-color="rgb(73.422241%, 31.983948%, 77.986145%)" offset="0.335938" />
                            <stop stop-opacity="1" stop-color="rgb(73.196411%, 32.029724%, 78.201294%)" offset="0.339844" />
                            <stop stop-opacity="1" stop-color="rgb(72.970581%, 32.0755%, 78.416443%)" offset="0.34375" />
                            <stop stop-opacity="1" stop-color="rgb(72.741699%, 32.121277%, 78.631592%)" offset="0.347656" />
                            <stop stop-opacity="1" stop-color="rgb(72.514343%, 32.167053%, 78.848267%)" offset="0.351562" />
                            <stop stop-opacity="1" stop-color="rgb(72.24884%, 32.23114%, 79.072571%)" offset="0.355469" />
                            <stop stop-opacity="1" stop-color="rgb(71.984863%, 32.296753%, 79.298401%)" offset="0.359375" />
                            <stop stop-opacity="1" stop-color="rgb(71.71936%, 32.36084%, 79.522705%)" offset="0.363281" />
                            <stop stop-opacity="1" stop-color="rgb(71.455383%, 32.426453%, 79.748535%)" offset="0.367188" />
                            <stop stop-opacity="1" stop-color="rgb(71.18988%, 32.49054%, 79.972839%)" offset="0.371094" />
                            <stop stop-opacity="1" stop-color="rgb(70.925903%, 32.556152%, 80.197144%)" offset="0.375" />
                            <stop stop-opacity="1" stop-color="rgb(70.6604%, 32.620239%, 80.421448%)" offset="0.378906" />
                            <stop stop-opacity="1" stop-color="rgb(70.396423%, 32.685852%, 80.647278%)" offset="0.382812" />
                            <stop stop-opacity="1" stop-color="rgb(70.13092%, 32.749939%, 80.871582%)" offset="0.386719" />
                            <stop stop-opacity="1" stop-color="rgb(69.865417%, 32.815552%, 81.097412%)" offset="0.390625" />
                            <stop stop-opacity="1" stop-color="rgb(69.599915%, 32.879639%, 81.321716%)" offset="0.394531" />
                            <stop stop-opacity="1" stop-color="rgb(69.335938%, 32.945251%, 81.547546%)" offset="0.398438" />
                            <stop stop-opacity="1" stop-color="rgb(69.070435%, 33.009338%, 81.771851%)" offset="0.402344" />
                            <stop stop-opacity="1" stop-color="rgb(68.806458%, 33.074951%, 81.996155%)" offset="0.40625" />
                            <stop stop-opacity="1" stop-color="rgb(68.540955%, 33.139038%, 82.220459%)" offset="0.410156" />
                            <stop stop-opacity="1" stop-color="rgb(68.276978%, 33.204651%, 82.446289%)" offset="0.414062" />
                            <stop stop-opacity="1" stop-color="rgb(68.011475%, 33.268738%, 82.670593%)" offset="0.417969" />
                            <stop stop-opacity="1" stop-color="rgb(67.747498%, 33.334351%, 82.896423%)" offset="0.421875" />
                            <stop stop-opacity="1" stop-color="rgb(67.481995%, 33.398438%, 83.120728%)" offset="0.425781" />
                            <stop stop-opacity="1" stop-color="rgb(67.218018%, 33.46405%, 83.345032%)" offset="0.429688" />
                            <stop stop-opacity="1" stop-color="rgb(66.952515%, 33.528137%, 83.569336%)" offset="0.433594" />
                            <stop stop-opacity="1" stop-color="rgb(66.687012%, 33.59375%, 83.795166%)" offset="0.4375" />
                            <stop stop-opacity="1" stop-color="rgb(66.421509%, 33.657837%, 84.01947%)" offset="0.441406" />
                            <stop stop-opacity="1" stop-color="rgb(66.157532%, 33.72345%, 84.2453%)" offset="0.445312" />
                            <stop stop-opacity="1" stop-color="rgb(65.892029%, 33.787537%, 84.469604%)" offset="0.449219" />
                            <stop stop-opacity="1" stop-color="rgb(65.628052%, 33.853149%, 84.695435%)" offset="0.453125" />
                            <stop stop-opacity="1" stop-color="rgb(65.362549%, 33.917236%, 84.919739%)" offset="0.457031" />
                            <stop stop-opacity="1" stop-color="rgb(65.098572%, 33.982849%, 85.144043%)" offset="0.460938" />
                            <stop stop-opacity="1" stop-color="rgb(64.833069%, 34.046936%, 85.368347%)" offset="0.464844" />
                            <stop stop-opacity="1" stop-color="rgb(64.569092%, 34.112549%, 85.594177%)" offset="0.46875" />
                            <stop stop-opacity="1" stop-color="rgb(64.303589%, 34.176636%, 85.818481%)" offset="0.472656" />
                            <stop stop-opacity="1" stop-color="rgb(64.039612%, 34.242249%, 86.044312%)" offset="0.476562" />
                            <stop stop-opacity="1" stop-color="rgb(63.774109%, 34.306335%, 86.268616%)" offset="0.480469" />
                            <stop stop-opacity="1" stop-color="rgb(63.510132%, 34.371948%, 86.49292%)" offset="0.484375" />
                            <stop stop-opacity="1" stop-color="rgb(63.244629%, 34.436035%, 86.717224%)" offset="0.488281" />
                            <stop stop-opacity="1" stop-color="rgb(62.979126%, 34.501648%, 86.943054%)" offset="0.492188" />
                            <stop stop-opacity="1" stop-color="rgb(62.713623%, 34.565735%, 87.167358%)" offset="0.496094" />
                            <stop stop-opacity="1" stop-color="rgb(62.449646%, 34.631348%, 87.393188%)" offset="0.5" />
                            <stop stop-opacity="1" stop-color="rgb(62.184143%, 34.695435%, 87.617493%)" offset="0.503906" />
                            <stop stop-opacity="1" stop-color="rgb(61.920166%, 34.761047%, 87.843323%)" offset="0.507813" />
                            <stop stop-opacity="1" stop-color="rgb(61.654663%, 34.825134%, 88.067627%)" offset="0.511719" />
                            <stop stop-opacity="1" stop-color="rgb(61.390686%, 34.890747%, 88.291931%)" offset="0.515625" />
                            <stop stop-opacity="1" stop-color="rgb(61.125183%, 34.954834%, 88.516235%)" offset="0.519531" />
                            <stop stop-opacity="1" stop-color="rgb(60.861206%, 35.020447%, 88.742065%)" offset="0.523438" />
                            <stop stop-opacity="1" stop-color="rgb(60.595703%, 35.084534%, 88.96637%)" offset="0.527344" />
                            <stop stop-opacity="1" stop-color="rgb(60.331726%, 35.150146%, 89.1922%)" offset="0.53125" />
                            <stop stop-opacity="1" stop-color="rgb(60.066223%, 35.214233%, 89.416504%)" offset="0.535156" />
                            <stop stop-opacity="1" stop-color="rgb(59.802246%, 35.279846%, 89.642334%)" offset="0.539062" />
                            <stop stop-opacity="1" stop-color="rgb(59.536743%, 35.343933%, 89.866638%)" offset="0.542969" />
                            <stop stop-opacity="1" stop-color="rgb(59.27124%, 35.409546%, 90.090942%)" offset="0.546875" />
                            <stop stop-opacity="1" stop-color="rgb(59.005737%, 35.473633%, 90.315247%)" offset="0.550781" />
                            <stop stop-opacity="1" stop-color="rgb(58.74176%, 35.539246%, 90.541077%)" offset="0.554688" />
                            <stop stop-opacity="1" stop-color="rgb(58.476257%, 35.603333%, 90.765381%)" offset="0.558594" />
                            <stop stop-opacity="1" stop-color="rgb(58.21228%, 35.668945%, 90.991211%)" offset="0.5625" />
                            <stop stop-opacity="1" stop-color="rgb(57.946777%, 35.733032%, 91.215515%)" offset="0.566406" />
                            <stop stop-opacity="1" stop-color="rgb(57.6828%, 35.798645%, 91.439819%)" offset="0.570312" />
                            <stop stop-opacity="1" stop-color="rgb(57.417297%, 35.862732%, 91.664124%)" offset="0.574219" />
                            <stop stop-opacity="1" stop-color="rgb(57.15332%, 35.928345%, 91.889954%)" offset="0.578125" />
                            <stop stop-opacity="1" stop-color="rgb(56.887817%, 35.992432%, 92.114258%)" offset="0.582031" />
                            <stop stop-opacity="1" stop-color="rgb(56.62384%, 36.058044%, 92.340088%)" offset="0.585938" />
                            <stop stop-opacity="1" stop-color="rgb(56.358337%, 36.122131%, 92.564392%)" offset="0.589844" />
                            <stop stop-opacity="1" stop-color="rgb(56.092834%, 36.187744%, 92.790222%)" offset="0.59375" />
                            <stop stop-opacity="1" stop-color="rgb(55.827332%, 36.251831%, 93.014526%)" offset="0.597656" />
                            <stop stop-opacity="1" stop-color="rgb(55.563354%, 36.317444%, 93.238831%)" offset="0.601562" />
                            <stop stop-opacity="1" stop-color="rgb(55.297852%, 36.381531%, 93.463135%)" offset="0.605469" />
                            <stop stop-opacity="1" stop-color="rgb(55.033875%, 36.447144%, 93.688965%)" offset="0.609375" />
                            <stop stop-opacity="1" stop-color="rgb(54.768372%, 36.51123%, 93.913269%)" offset="0.613281" />
                            <stop stop-opacity="1" stop-color="rgb(54.504395%, 36.576843%, 94.139099%)" offset="0.617187" />
                            <stop stop-opacity="1" stop-color="rgb(54.238892%, 36.64093%, 94.363403%)" offset="0.621094" />
                            <stop stop-opacity="1" stop-color="rgb(53.974915%, 36.706543%, 94.587708%)" offset="0.625" />
                            <stop stop-opacity="1" stop-color="rgb(53.709412%, 36.77063%, 94.812012%)" offset="0.628906" />
                            <stop stop-opacity="1" stop-color="rgb(53.445435%, 36.836243%, 95.037842%)" offset="0.632813" />
                            <stop stop-opacity="1" stop-color="rgb(53.179932%, 36.90033%, 95.262146%)" offset="0.636719" />
                            <stop stop-opacity="1" stop-color="rgb(52.915955%, 36.965942%, 95.487976%)" offset="0.640625" />
                            <stop stop-opacity="1" stop-color="rgb(52.650452%, 37.030029%, 95.71228%)" offset="0.644531" />
                            <stop stop-opacity="1" stop-color="rgb(52.384949%, 37.095642%, 95.93811%)" offset="0.648438" />
                            <stop stop-opacity="1" stop-color="rgb(52.119446%, 37.159729%, 96.162415%)" offset="0.652344" />
                            <stop stop-opacity="1" stop-color="rgb(51.855469%, 37.225342%, 96.386719%)" offset="0.65625" />
                            <stop stop-opacity="1" stop-color="rgb(51.634216%, 37.31842%, 96.427917%)" offset="0.660156" />
                            <stop stop-opacity="1" stop-color="rgb(51.41449%, 37.413025%, 96.469116%)" offset="0.664062" />
                            <stop stop-opacity="1" stop-color="rgb(51.203918%, 37.513733%, 96.469116%)" offset="0.667969" />
                            <stop stop-opacity="1" stop-color="rgb(50.994873%, 37.614441%, 96.469116%)" offset="0.671875" />
                            <stop stop-opacity="1" stop-color="rgb(50.784302%, 37.713623%, 96.469116%)" offset="0.675781" />
                            <stop stop-opacity="1" stop-color="rgb(50.57373%, 37.814331%, 96.469116%)" offset="0.679688" />
                            <stop stop-opacity="1" stop-color="rgb(50.363159%, 37.915039%, 96.469116%)" offset="0.683594" />
                            <stop stop-opacity="1" stop-color="rgb(50.152588%, 38.015747%, 96.469116%)" offset="0.6875" />
                            <stop stop-opacity="1" stop-color="rgb(49.942017%, 38.114929%, 96.469116%)" offset="0.691406" />
                            <stop stop-opacity="1" stop-color="rgb(49.731445%, 38.215637%, 96.469116%)" offset="0.695312" />
                            <stop stop-opacity="1" stop-color="rgb(49.520874%, 38.316345%, 96.469116%)" offset="0.699219" />
                            <stop stop-opacity="1" stop-color="rgb(49.310303%, 38.417053%, 96.469116%)" offset="0.703125" />
                            <stop stop-opacity="1" stop-color="rgb(49.099731%, 38.516235%, 96.469116%)" offset="0.707031" />
                            <stop stop-opacity="1" stop-color="rgb(48.88916%, 38.616943%, 96.469116%)" offset="0.710938" />
                            <stop stop-opacity="1" stop-color="rgb(48.678589%, 38.716125%, 96.469116%)" offset="0.714844" />
                            <stop stop-opacity="1" stop-color="rgb(48.468018%, 38.816833%, 96.469116%)" offset="0.71875" />
                            <stop stop-opacity="1" stop-color="rgb(48.257446%, 38.917542%, 96.469116%)" offset="0.722656" />
                            <stop stop-opacity="1" stop-color="rgb(48.048401%, 39.01825%, 96.469116%)" offset="0.726562" />
                            <stop stop-opacity="1" stop-color="rgb(47.83783%, 39.117432%, 96.469116%)" offset="0.730469" />
                            <stop stop-opacity="1" stop-color="rgb(47.627258%, 39.21814%, 96.469116%)" offset="0.734375" />
                            <stop stop-opacity="1" stop-color="rgb(47.416687%, 39.318848%, 96.469116%)" offset="0.738281" />
                            <stop stop-opacity="1" stop-color="rgb(47.206116%, 39.419556%, 96.469116%)" offset="0.742187" />
                            <stop stop-opacity="1" stop-color="rgb(46.995544%, 39.518738%, 96.469116%)" offset="0.746094" />
                            <stop stop-opacity="1" stop-color="rgb(46.784973%, 39.619446%, 96.469116%)" offset="0.75" />
                            <stop stop-opacity="1" stop-color="rgb(46.574402%, 39.720154%, 96.469116%)" offset="0.753906" />
                            <stop stop-opacity="1" stop-color="rgb(46.363831%, 39.820862%, 96.469116%)" offset="0.757813" />
                            <stop stop-opacity="1" stop-color="rgb(46.153259%, 39.920044%, 96.469116%)" offset="0.761719" />
                            <stop stop-opacity="1" stop-color="rgb(45.942688%, 40.020752%, 96.469116%)" offset="0.765625" />
                            <stop stop-opacity="1" stop-color="rgb(45.732117%, 40.12146%, 96.469116%)" offset="0.769531" />
                            <stop stop-opacity="1" stop-color="rgb(45.523071%, 40.222168%, 96.469116%)" offset="0.773438" />
                            <stop stop-opacity="1" stop-color="rgb(45.3125%, 40.32135%, 96.469116%)" offset="0.777344" />
                            <stop stop-opacity="1" stop-color="rgb(45.101929%, 40.422058%, 96.469116%)" offset="0.78125" />
                            <stop stop-opacity="1" stop-color="rgb(44.891357%, 40.522766%, 96.469116%)" offset="0.785156" />
                            <stop stop-opacity="1" stop-color="rgb(44.680786%, 40.623474%, 96.469116%)" offset="0.789062" />
                            <stop stop-opacity="1" stop-color="rgb(44.470215%, 40.722656%, 96.469116%)" offset="0.792969" />
                            <stop stop-opacity="1" stop-color="rgb(44.259644%, 40.823364%, 96.469116%)" offset="0.796875" />
                            <stop stop-opacity="1" stop-color="rgb(44.049072%, 40.924072%, 96.469116%)" offset="0.800781" />
                            <stop stop-opacity="1" stop-color="rgb(43.838501%, 41.02478%, 96.469116%)" offset="0.804688" />
                            <stop stop-opacity="1" stop-color="rgb(43.62793%, 41.123962%, 96.469116%)" offset="0.808594" />
                            <stop stop-opacity="1" stop-color="rgb(43.417358%, 41.22467%, 96.469116%)" offset="0.8125" />
                            <stop stop-opacity="1" stop-color="rgb(43.206787%, 41.325378%, 96.469116%)" offset="0.816406" />
                            <stop stop-opacity="1" stop-color="rgb(42.997742%, 41.426086%, 96.469116%)" offset="0.820312" />
                            <stop stop-opacity="1" stop-color="rgb(42.78717%, 41.525269%, 96.469116%)" offset="0.824219" />
                            <stop stop-opacity="1" stop-color="rgb(42.576599%, 41.625977%, 96.469116%)" offset="0.828125" />
                            <stop stop-opacity="1" stop-color="rgb(42.366028%, 41.726685%, 96.469116%)" offset="0.832031" />
                            <stop stop-opacity="1" stop-color="rgb(42.155457%, 41.827393%, 96.469116%)" offset="0.835938" />
                            <stop stop-opacity="1" stop-color="rgb(41.944885%, 41.926575%, 96.469116%)" offset="0.839844" />
                            <stop stop-opacity="1" stop-color="rgb(41.734314%, 42.027283%, 96.469116%)" offset="0.84375" />
                            <stop stop-opacity="1" stop-color="rgb(41.523743%, 42.127991%, 96.469116%)" offset="0.847656" />
                            <stop stop-opacity="1" stop-color="rgb(41.313171%, 42.228699%, 96.469116%)" offset="0.851562" />
                            <stop stop-opacity="1" stop-color="rgb(41.1026%, 42.327881%, 96.469116%)" offset="0.855469" />
                            <stop stop-opacity="1" stop-color="rgb(40.892029%, 42.428589%, 96.469116%)" offset="0.859375" />
                            <stop stop-opacity="1" stop-color="rgb(40.681458%, 42.527771%, 96.469116%)" offset="0.863281" />
                            <stop stop-opacity="1" stop-color="rgb(40.470886%, 42.628479%, 96.469116%)" offset="0.867187" />
                            <stop stop-opacity="1" stop-color="rgb(40.260315%, 42.729187%, 96.469116%)" offset="0.871094" />
                            <stop stop-opacity="1" stop-color="rgb(40.05127%, 42.829895%, 96.469116%)" offset="0.875" />
                            <stop stop-opacity="1" stop-color="rgb(39.840698%, 42.929077%, 96.469116%)" offset="0.878906" />
                            <stop stop-opacity="1" stop-color="rgb(39.630127%, 43.029785%, 96.469116%)" offset="0.882813" />
                            <stop stop-opacity="1" stop-color="rgb(39.419556%, 43.130493%, 96.469116%)" offset="0.886719" />
                            <stop stop-opacity="1" stop-color="rgb(39.208984%, 43.231201%, 96.469116%)" offset="0.890625" />
                            <stop stop-opacity="1" stop-color="rgb(38.998413%, 43.330383%, 96.469116%)" offset="0.894531" />
                            <stop stop-opacity="1" stop-color="rgb(38.787842%, 43.431091%, 96.469116%)" offset="0.898438" />
                            <stop stop-opacity="1" stop-color="rgb(38.577271%, 43.531799%, 96.469116%)" offset="0.902344" />
                            <stop stop-opacity="1" stop-color="rgb(38.366699%, 43.632507%, 96.469116%)" offset="0.90625" />
                            <stop stop-opacity="1" stop-color="rgb(38.156128%, 43.731689%, 96.469116%)" offset="0.910156" />
                            <stop stop-opacity="1" stop-color="rgb(37.945557%, 43.832397%, 96.469116%)" offset="0.914062" />
                            <stop stop-opacity="1" stop-color="rgb(37.734985%, 43.933105%, 96.469116%)" offset="0.917969" />
                            <stop stop-opacity="1" stop-color="rgb(37.52594%, 44.033813%, 96.469116%)" offset="0.921875" />
                            <stop stop-opacity="1" stop-color="rgb(37.315369%, 44.132996%, 96.469116%)" offset="0.925781" />
                            <stop stop-opacity="1" stop-color="rgb(37.104797%, 44.233704%, 96.469116%)" offset="0.929688" />
                            <stop stop-opacity="1" stop-color="rgb(36.894226%, 44.334412%, 96.469116%)" offset="0.933594" />
                            <stop stop-opacity="1" stop-color="rgb(36.683655%, 44.43512%, 96.469116%)" offset="0.9375" />
                            <stop stop-opacity="1" stop-color="rgb(36.473083%, 44.534302%, 96.469116%)" offset="0.941406" />
                            <stop stop-opacity="1" stop-color="rgb(36.262512%, 44.63501%, 96.469116%)" offset="0.945312" />
                            <stop stop-opacity="1" stop-color="rgb(36.051941%, 44.735718%, 96.469116%)" offset="0.949219" />
                            <stop stop-opacity="1" stop-color="rgb(35.84137%, 44.836426%, 96.469116%)" offset="0.953125" />
                            <stop stop-opacity="1" stop-color="rgb(35.630798%, 44.935608%, 96.469116%)" offset="0.957031" />
                            <stop stop-opacity="1" stop-color="rgb(35.420227%, 45.036316%, 96.469116%)" offset="0.960938" />
                            <stop stop-opacity="1" stop-color="rgb(35.354614%, 45.066833%, 96.469116%)" offset="0.96875" />
                            <stop stop-opacity="1" stop-color="rgb(35.289001%, 45.098877%, 96.469116%)" offset="1" />
                        </linearGradient>
                        <clipPath id="ca10373fb7">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                        <clipPath id="7a9107ce1c">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                        <clipPath id="bc44949ab3">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                        <mask id="3fb85c0fdc">
                            <g filter="url(#14f16c6a34)">
                                <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <g clip-path="url(#bc44949ab3)">
                                        <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                            <g clip-path="url(#7a9107ce1c)">
                                                <g fill="#000000" fill-opacity="1">
                                                    <g transform="translate(21.325607, 316.880435)">
                                                        <g>
                                                            <path d="M 148.421875 -198.984375 L 203.703125 -198.984375 L 203.703125 -143.6875 L 148.421875 -143.6875 Z M 318.71875 -143.6875 L 263.421875 -143.6875 L 263.421875 -198.984375 L 318.71875 -198.984375 Z M 0 -159.0625 L 39.03125 -198.09375 L 39.03125 -94.90625 L 0 -57.0625 Z M 0 -55.28125 L 146.640625 -198.09375 L 146.640625 -143.09375 L 0 -0.59375 Z M 39.90625 -198.09375 L 78.9375 -159.0625 L 78.9375 -134.234375 L 39.90625 -96.390625 Z M 115.3125 -55.28125 L 262.546875 -198.09375 L 262.546875 -143.09375 L 115.3125 -0.59375 Z M 1.1875 0 L 147.828125 -142.203125 L 202.53125 -142.203125 L 56.46875 0 Z M 171.78125 0 L 116.484375 0 L 262.84375 -142.203125 L 317.828125 -142.203125 Z M 171.78125 0 " />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </mask>
                        <clipPath id="4c03d0db15">
                            <path d="M 0 0 L 375 0 L 375 375 L 0 375 Z M 0 0 " clip-rule="nonzero" />
                        </clipPath>
                        <clipPath id="6151a552c9">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                        <clipPath id="c1dca093c8">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                        <clipPath id="a668942515">
                            <rect x="0" width="375" y="0" height="375" />
                        </clipPath>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)">
                        <g clip-path="url(#a668942515)">
                            <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                <g clip-path="url(#c1dca093c8)">
                                    <g mask="url(#3fb85c0fdc)">
                                        <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                            <g clip-path="url(#6151a552c9)">
                                                <g clip-path="url(#4c03d0db15)">
                                                    <rect x="-201.3" fill="url(#336d1348f6)" width="777.6" height="777.599981" y="-201.299995" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="fade-in mb-6">
                <h1 class="number-404">404</h1>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 fade-in-delay-1">
                Page Not Found
            </h2>

            <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto fade-in-delay-2">
                The page you're looking for doesn't exist or has been moved. Let's get you back on track.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-4 mb-8 fade-in-delay-2">
            <a href="/" class="bg-gray-50 border border-gray-200 rounded-2xl p-6 suggestion-card group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-home text-blue-600 text-lg"></i>
                    </div>
                    <div class="flex-1 text-left">
                        <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">Go Home</h3>
                        <p class="text-sm text-gray-600">Return to the homepage</p>
                    </div>
                    <i class="fas fa-arrow-right text-gray-400 group-hover:text-blue-600 transition-colors mt-1"></i>
                </div>
            </a>

            <a href="https://webbyphp.top/docs" target="_blank" class="bg-gray-50 border border-gray-200 rounded-2xl p-6 suggestion-card group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-book text-purple-600 text-lg"></i>
                    </div>
                    <div class="flex-1 text-left">
                        <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-purple-600 transition-colors">Documentation</h3>
                        <p class="text-sm text-gray-600">Browse our guides and API docs</p>
                    </div>
                    <i class="fas fa-arrow-right text-gray-400 group-hover:text-purple-600 transition-colors mt-1"></i>
                </div>
            </a>
        </div>

        <div class="fade-in-delay-2">
            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4">Popular Pages</h3>
            <div class="flex flex-wrap gap-2">
                <a href="https://webbyphp.top/docs/" target="_blank" class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-all">
                    Documentation Page
                </a>
                <a href="https://webbyphp.top/docs/getting-started/" target="_blank" class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-all">
                    Getting Started
                </a>
                <a href="https://webbyphp.top/docs/getting-started/installation" target="_blank" class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-all">
                    Installation
                </a>
                <a href="https://webbyphp.top/docs/tutorials" target="_blank" class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 hover:border-gray-300 hover:bg-gray-50 transition-all">
                    Tutorials
                </a>
            </div>
        </div>

        <div class="mt-12 pt-6 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-500 mb-2">
                Still need help? <a href="https://webbyphp.top/support" target="_blank" class="text-blue-600 hover:text-blue-700 font-medium">Contact Support</a>
            </p>
            <p class="text-xs text-gray-400">Error Code: 404 | Request ID: req_<span id="request-id"></span></p>
        </div>
    </div>

    <script>
        const requestId = Math.random().toString(36).substring(2, 15);
        document.getElementById('request-id').textContent = requestId;
    </script>
</body>

</html>