@extends('layouts.app')

@section('title', 'My Portfolio')

@php
    $projects = [
        [
            'title' => 'Travel Clothing Club (Flutter)',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Pusher for real-time chat, and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/app/travel-clothing-club/id6754902957',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/29/8d/29/298d2982-53c4-c000-73d9-5c87477ec799/AppIcon-0-0-1x_U007emarketing-0-7-0-85-220.png/800x800ia-75.webp'
        ],
        [
            'title' => 'VPN Global Protect: FONVPN (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/vpn-global-protect-fonvpn/id6468386565',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767870655/1024_wvxsiu.png'
        ],
        [
            'title' => 'VPN-Lightning (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/vpn-lightning/id1585962294',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/5e/c4/a7/5ec4a71c-0aab-eca3-1ad1-212a67ae17a3/AppIcon-0-0-1x_U007emarketing-0-11-0-512MB-85-220.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Mite VPN (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/mite-vpn/id6745258516',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/d7/2e/87/d72e8791-9d3e-4d20-97df-6d21aead5dc6/AppIcon-0-0-1x_U007epad-0-1-0-85-220.jpeg/800x800ia-75.webp'
        ],
        [
            'title' => 'Urban Shield VPN (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/urban-shield-vpn/id6753347161',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/d7/62/07/d7620741-bc44-855f-6a5a-63b12ec4bc1c/AppIcon-0-0-1x_U007epad-0-1-0-85-220.png/800x800ia-75.webp'
        ],
        [
            'title' => 'XyberVeil VPN (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/xyberveil-vpn/id6747746478',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/f6/66/7c/f6667c12-521d-2f95-89d0-4a5c3b52574d/AppIcon-0-1x_U007epad-0-1-0-85-220-0.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Virgo VPN (iOS - SwiftUI)',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/virgo-vpn/id6477369066',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/8c/47/db/8c47db0c-a400-388b-7114-bfea5490fc8c/AppIcon-0-0-1x_U007emarketing-0-11-0-85-220.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Bundle Up (Flutter)',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Firestore for real-time chat, and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/app/bundle-up/id6741536037',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/00/e0/83/00e0836b-06d0-bee6-6d15-06f5258b87c6/AppIcon-1x_U007emarketing-0-11-0-85-220-0.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Foodage (Flutter)',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Firestore for real-time chat, and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/app/foodage-find-food-reviews/id1620709672',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/PurpleSource211/v4/f2/f2/24/f2f22495-2678-703b-30d0-ed6acd41fc19/Placeholder.mill/800x800bb-75.webp'
        ],
        [
            'title' => 'Takehair (Flutter)',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Firestore for real-time chat, pusher for real time status update and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/developer/takehair/id1662470871',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/05/2b/e4/052be460-aaac-b826-e569-c2019a5a3509/AppIcon-1x_U007emarketing-0-11-0-85-220-0.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Life Defender Alert Family (iOS - SwiftUI)',
            'description' => 'iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication.',
            'url' => 'https://apps.apple.com/us/app/life-defender-alert-family/id6503321782',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/44/08/f8/4408f844-c42e-3a83-d7bb-8a86fe492d45/AppIcon-0-0-1x_U007ephone-0-11-85-220.png/800x800ia-75.webp'
        ],
        [
            'title' => 'Ishana Dance (iOS - SwiftUI)',
            'description' => 'iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication.',
            'url' => 'https://apps.apple.com/us/app/ishana-dance/id1643969495',
            'image' => 'https://is1-ssl.mzstatic.com/image/thumb/PurpleSource211/v4/5b/6e/70/5b6e70cf-619c-2cd0-da0f-689b6e484889/Placeholder.mill/800x800bb-75.webp'
        ],
    ];

    $skills = [
        'Flutter & Dart',
        'Swift / SwiftUI / Xcode (iOS)',
        'Kotlin / Java / Android Studio (Android)',
        'Firebase/FCM/Cloud Firestore',
        'REST APIs (OpenAI, Stripe, Google Maps, Pusher, etc.)',
        'UI / UX Design'
    ];

    $statistics = [
        ['number' => '16+', 'label' => 'Apps Published'],
        ['number' => '4+', 'label' => 'Years Experience'],
        ['number' => '98%', 'label' => 'Client Satisfaction'],
        ['number' => '10k+', 'label' => 'App Downloads']
    ];

    $experience = [
        [
            'title' => 'iOS app Developer(SwiftUI) / Flutter Developer',
            'company' => 'digitalD.tech',
            'company_url' => 'https://digitald.tech',
            'period' => 'Feb 2025 - Present',
            'description' => 'Developed and published 6+ mobile applications on App Store. Specialized in Flutter cross-platform development and native iOS apps using SwiftUI.',
            'achievements' => [
                'Published 6+ apps on Apple App Store',
                'Implemented MVVM and Clean Architecture patterns',
                'Integrated payment systems (Stripe, StoreKit)',
                'Optimized app performance and reduced crash rates'
            ]
        ],
        [
            'title' => 'Mobile App Developer',
            'company' => 'Digixvalley LLC',
            'company_url' => 'https://digixvalley.com',
            'period' => 'Feb 2022 - Oct 2024',
            'description' => 'Developed mobile applications for clients, focusing on user experience and performance optimization.',
            'achievements' => [
                'Delivered 9+ production-ready apps using ',
                'Collaborated with cross-functional teams',
                'Improved app load times by 40%'
            ]
        ],
        [
            'title' => 'Mobile App Developer (Android, IOS)',
            'company' => 'DevSaar',
            'company_url' => 'https://www.thedevsaar.com',
            'period' => 'Jan 2020 - Feb 2022',
            'description' => 'Developed mobile applications for clients, focusing on user experience and performance optimization.',
            'achievements' => [
                'Delivered 7+ production-ready apps using ',
                'Developed, built, and distributed native Android and iOS apps on the Google Play Store and Apple App Store.',
                'Integrated third-party libraries and services like Alamofire, Stripe, Firebase.',
                'Developed iOS apps using SwiftUI and the MVVM architecture.',
                'Gained experience in Android app development using JetPack.'
            ]
        ]
    ];

    $technologies = [
        'Languages' => ['Dart', 'Swift', 'Kotlin', 'Java'],
        'Frameworks' => ['Flutter', 'SwiftUI', 'UIKit', 'Android SDK'],
        'State Management' => ['GetX', 'Provider', 'Riverpod', 'MVVM'],
        'Backend & APIs' => ['REST APIs', 'Firebase', 'AWS'],
        'Tools & Services' => ['Zoho','Git', 'Jira', 'Postman', 'Stripe', 'Pusher', 'FCM'],
        'Design' => ['UI/UX Design', 'Google Material Design','Human Interface Guidelines']
    ];
@endphp

@section('header')
    <x-header 
        name="Muhammad Asim" 
        tagline="Mobile App Developer | Flutter • iOS • Android" 
    />
@endsection

@section('content')
    <section data-aos="fade-up">
        <h2 class="section-title">About Me</h2>
        <div class="about">
            <div>
                <p>
                I’m a Mobile App Developer with 4+ years of experience delivering robust, high-quality mobile applications across both cross-platform (Flutter) and native (iOS/Android) environments. 
                I specialize in modern state management solutions (Provider, GetX, Riverpod, SwiftUI), scalable architectures (MVVM, Clean Architecture), responsive UI design, seamless REST API integration, and performance optimization.
                </p>
            </div>
            <img src="https://avatars.githubusercontent.com/u/84513468?v=4" alt="Developer">
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics" data-aos="fade-up">
        <div class="stats-grid">
            @foreach($statistics as $stat)
                <div class="stat-card">
                    <div class="stat-number">{{ $stat['number'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section data-aos="fade-up">
        <h2 class="section-title">Skills</h2>
        <div class="skills">
            @foreach($skills as $skill)
                <div class="skill-card">{{ $skill }}</div>
            @endforeach
        </div>
    </section>

    <!-- Technologies & Tools Section -->
    <section data-aos="fade-up">
        <h2 class="section-title">Technologies & Tools</h2>
        <div class="technologies">
            @foreach($technologies as $category => $items)
                <div class="tech-category">
                    <h3 class="tech-category-title">{{ $category }}</h3>
                    <div class="tech-tags">
                        @foreach($items as $item)
                            <span class="tech-tag">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Experience Section -->
    <section data-aos="fade-up">
        <h2 class="section-title">Experience</h2>
        <div class="experience-timeline">
            @foreach($experience as $exp)
                <div class="experience-item">
                    <div class="exp-header">
                        <div>
                            <h3 class="exp-title">{{ $exp['title'] }}</h3>
                            @if(isset($exp['company_url']) && $exp['company_url'])
                                <a href="{{ $exp['company_url'] }}" target="_blank" rel="noopener noreferrer" class="exp-company">
                                    {{ $exp['company'] }}
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            @else
                                <p class="exp-company">{{ $exp['company'] }}</p>
                            @endif
                        </div>
                        <span class="exp-period">{{ $exp['period'] }}</span>
                    </div>
                    <p class="exp-description">{{ $exp['description'] }}</p>
                    <ul class="exp-achievements">
                        @foreach($exp['achievements'] as $achievement)
                            <li><i class="fas fa-check-circle"></i> {{ $achievement }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <section data-aos="fade-up">
        <h2 class="section-title">Projects</h2>
        <div class="projects">
            @foreach($projects as $project)
                <x-project-card
                    :title="$project['title']"
                    :description="$project['description']"
                    :url="$project['url']"
                    :image="$project['image']"
                />
            @endforeach
        </div>
    </section>

    <section class="contact" data-aos="zoom-in">
        <h2 class="section-title">Contact</h2>
        <p>Interested in working together? Let's talk.</p>
        <div class="contact-links">
            <a href="mailto:asim1cva@gmail.com" class="contact-link">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
            <a href="https://github.com/asim1cva" target="_blank" rel="noopener noreferrer" class="contact-link">
                <i class="fab fa-github"></i>
                <span>GitHub</span>
            </a>
            <a href="https://www.linkedin.com/in/muhammad-asim-514854137" target="_blank" rel="noopener noreferrer" class="contact-link">
                <i class="fab fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        </div>
    </section>
@endsection

@section('footer')
    <x-footer 
        name="Muhammad Asim" 
        title="Mobile App Developer" 
    />
@endsection
