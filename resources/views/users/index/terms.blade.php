@extends('layout.users.index')
@section('title')
   Terms of use
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .terms-text {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(58, 134, 255, 0.1);
        }
        
        .terms-text p {
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .terms-text ul, .terms-text ol {
            margin-left: 25px;
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .terms-text li {
            margin-bottom: 10px;
        }
        
        .highlight-box {
            background-color: rgba(13, 27, 62, 0.5);
            border-left: 4px solid var(--secondary);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .highlight-title {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .warning-box {
            background-color: rgba(255, 100, 100, 0.1);
            border-left: 4px solid #ff6464;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .warning-title {
            color: #ff6464;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .info-box {
            background-color: rgba(0, 201, 183, 0.1);
            border-left: 4px solid var(--accent);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .info-title {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .definition-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }
        
        .definition-item {
            background-color: rgba(13, 27, 62, 0.3);
            padding: 20px;
            border-radius: var(--border-radius);
            border: 1px solid rgba(58, 134, 255, 0.1);
        }
        
        .definition-term {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 17px;
        }
        
        .definition-desc {
            color: var(--text-light);
            font-size: 15px;
        }
        
        /* Table Styles */
        .earnings-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            border-radius: var(--border-radius);
            overflow: hidden;
        }
        
        .earnings-table th {
            background-color: var(--primary-light);
            color: var(--text);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid var(--secondary);
        }
        
        .earnings-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(58, 134, 255, 0.1);
            color: var(--text-light);
        }
        
        .earnings-table tr:hover {
            background-color: rgba(58, 134, 255, 0.05);
        }
        
        /* Acceptance Section */
        .acceptance-section {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 40px;
            text-align: center;
            margin: 50px 0;
            border: 2px solid rgba(58, 134, 255, 0.2);
        }
        
        .acceptance-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--text);
        }
        
        .acceptance-text {
            color: var(--text-light);
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
      <section class="terms-conditions">
    <div class="legal-header g-10 text-center w-full column align-center">
        <span class="hero-title">Terms & Conditions</span>
        <div style="opacity:0.9" class="legal-notice font-1">Please read these terms carefully before using EarnHive services</div>
         <div style="color:var(--primary-brighter)" class="effective-date"><i>Last Updated: January 12th, 2026</i></div>
    </div>

     <!-- Terms Content -->
    <section class="terms-content">
        <div class="container">
            <!-- Introduction -->
            <div class="terms-section">
                <h2 class="section-title">1. Introduction</h2>
                <div class="terms-text">
                    <p>Welcome to EarnHive! These Terms and Conditions ("Terms") govern your use of the EarnHive platform, website, mobile application, and related services (collectively, the "Platform").</p>
                    
                    <p>By accessing or using the Platform, you agree to be bound by these Terms. If you disagree with any part of the Terms, you may not access the Platform.</p>
                    
                    <div class="highlight-box">
                        <div class="highlight-title">Important Notice</div>
                        <p>EarnHive is a social monetization platform that allows users to earn rewards for engaging with content, completing tasks, and participating in the community. These Terms outline your rights and responsibilities as a user.</p>
                    </div>
                </div>
            </div>

            <!-- Definitions -->
            <div class="terms-section" id="definitions">
                <h2 class="section-title">2. Definitions</h2>
                <div class="terms-text">
                    <p>For the purposes of these Terms, the following definitions apply:</p>
                    
                    <div class="definition-list">
                        <div class="definition-item">
                            <div class="definition-term">Platform</div>
                            <div class="definition-desc">The EarnHive website, mobile application, and all associated services.</div>
                        </div>
                        
                        <div class="definition-item">
                            <div class="definition-term">User / You</div>
                            <div class="definition-desc">Any individual who accesses or uses the Platform.</div>
                        </div>
                        
                        <div class="definition-item">
                            <div class="definition-term">Earnings</div>
                            <div class="definition-desc">The rewards earned by Users for completing tasks on the Platform.</div>
                        </div>
                        
                        <div class="definition-item">
                            <div class="definition-term">Tasks</div>
                            <div class="definition-desc">Activities available on the Platform that Users can complete to earn rewards.</div>
                        </div>
                        
                        <div class="definition-item">
                            <div class="definition-term">Referral</div>
                            <div class="definition-desc">The act of inviting new Users to join the Platform using your unique referral link.</div>
                        </div>
                        
                        <div class="definition-item">
                            <div class="definition-term">Withdrawal</div>
                            <div class="definition-desc">The process of converting earned rewards into real-world currency.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Registration -->
            <div class="terms-section">
                <h2 class="section-title">3. Account Registration</h2>
                <div class="terms-text">
                    <p>To use the Platform, you must register for an account. You agree to:</p>
                    
                    <ol>
                        <li>Provide accurate, current, and complete information during registration</li>
                        <li>Maintain and promptly update your account information</li>
                        <li>Maintain the security of your account credentials</li>
                        <li>Accept responsibility for all activities that occur under your account</li>
                        <li>Be at least 18 years of age or have parental consent</li>
                    </ol>
                    
                    <div class="warning-box">
                        <div class="warning-title">Account Security</div>
                        <p>You are solely responsible for maintaining the confidentiality of your account credentials. EarnHive will not be liable for any loss or damage arising from your failure to protect your account information.</p>
                    </div>
                </div>
            </div>

            <!-- Earnings Structure -->
            <div class="terms-section" id="earnings">
                <h2 class="section-title">4. Earnings Structure & Rewards</h2>
                <div class="terms-text">
                    <p>EarnHive offers various ways to earn rewards through the Platform. The current earning structure is as follows:</p>
                    
                    <table class="earnings-table">
                        <thead>
                            <tr>
                                <th>Task / Activity</th>
                                <th>Reward Amount</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Registration</td>
                                <td>FREE</td>
                                <td>No fee required to join EarnHive</td>
                            </tr>
                            <tr>
                                <td>Leg-in Claims</td>
                                <td>₦300</td>
                                <td>Reward for daily check-ins</td>
                            </tr>
                            <tr>
                                <td>Watch & Earn</td>
                                <td>₦350</td>
                                <td>Reward for watching videos/ads</td>
                            </tr>
                            <tr>
                                <td>Per Tap</td>
                                <td>₦100</td>
                                <td>Reward for one-click tasks</td>
                            </tr>
                            <tr>
                                <td>Sign-up Claims</td>
                                <td>₦2000</td>
                                <td>Bonus for new user completion</td>
                            </tr>
                            <tr>
                                <td>Referral Reward</td>
                                <td>₦1000</td>
                                <td>Reward for successful referrals</td>
                            </tr>
                            <tr>
                                <td>Stream & Earn</td>
                                <td>₦250</td>
                                <td>Reward for streaming content</td>
                            </tr>
                            <tr>
                                <td>Per Minutes Claim</td>
                                <td>₦100</td>
                                <td>Reward for time spent on platform</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="info-box">
                        <div class="info-title">Reward Availability</div>
                        <p>EarnHive reserves the right to modify, suspend, or discontinue any earning opportunity at any time. Reward rates may change based on market conditions, advertiser demand, and other factors.</p>
                    </div>
                </div>
            </div>

            <!-- Withdrawal Policy -->
            <div class="terms-section">
                <h2 class="section-title">5. Withdrawal Policy</h2>
                <div class="terms-text">
                    <p>Users may withdraw their earnings subject to the following conditions:</p>
                    
                    <ol>
                        <li>Minimum withdrawal threshold: ₦5000</li>
                        <li>Withdrawals are processed within 5-7 business days</li>
                        <li>Users must complete identity verification for withdrawals over ₦20,000</li>
                        <li>Withdrawal methods include bank transfer and mobile money</li>
                        <li>EarnHive may charge a processing fee for withdrawals</li>
                    </ol>
                    
                    <div class="warning-box">
                        <div class="warning-title">Fraud Prevention</div>
                        <p>All withdrawals are subject to fraud review. EarnHive reserves the right to delay, suspend, or cancel any withdrawal if fraudulent activity is suspected. Users found engaging in fraudulent activities will have their accounts permanently suspended and earnings forfeited.</p>
                    </div>
                </div>
            </div>

            <!-- Prohibited Activities -->
            <div class="terms-section" id="prohibited">
                <h2 class="section-title">6. Prohibited Activities</h2>
                <div class="terms-text">
                    <p>Users are strictly prohibited from engaging in the following activities:</p>
                    
                    <ol>
                        <li>Creating multiple accounts to exploit referral bonuses</li>
                        <li>Using automated scripts, bots, or other unauthorized methods to complete tasks</li>
                        <li>Engaging in click fraud or artificial engagement generation</li>
                        <li>Attempting to hack, reverse engineer, or compromise Platform security</li>
                        <li>Sharing account credentials with others</li>
                        <li>Engaging in any illegal activities through the Platform</li>
                        <li>Posting or sharing inappropriate, offensive, or harmful content</li>
                        <li>Attempting to manipulate the Platform's reward system</li>
                    </ol>
                    
                    <div class="warning-box">
                        <div class="warning-title">Consequences of Violation</div>
                        <p>Violation of these prohibitions may result in immediate account suspension, forfeiture of all earned rewards, and permanent banning from the Platform. EarnHive reserves the right to take legal action against users who engage in fraudulent activities.</p>
                    </div>
                </div>
            </div>

            <!-- Intellectual Property -->
            <div class="terms-section">
                <h2 class="section-title">7. Intellectual Property</h2>
                <div class="terms-text">
                    <p>The EarnHive Platform and its original content, features, and functionality are owned by EarnHive and are protected by international copyright, trademark, and other intellectual property laws.</p>
                    
                    <p>Users retain ownership of the content they create and share on the Platform, but grant EarnHive a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, and display such content for Platform operation and promotion.</p>
                </div>
            </div>

            <!-- Termination -->
            <div class="terms-section">
                <h2 class="section-title">8. Termination</h2>
                <div class="terms-text">
                    <p>EarnHive may terminate or suspend your account and access to the Platform immediately, without prior notice or liability, for any reason, including if you breach these Terms.</p>
                    
                    <p>Upon termination, your right to use the Platform will cease immediately. If you wish to terminate your account, you may simply discontinue using the Platform.</p>
                </div>
            </div>

            <!-- Limitation of Liability -->
            <div class="terms-section">
                <h2 class="section-title">9. Limitation of Liability</h2>
                <div class="terms-text">
                    <p>In no event shall EarnHive, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
                    
                    <ol>
                        <li>Your access to or use of or inability to access or use the Platform</li>
                        <li>Any conduct or content of any third party on the Platform</li>
                        <li>Any content obtained from the Platform</li>
                        <li>Unauthorized access, use, or alteration of your transmissions or content</li>
                    </ol>
                </div>
            </div>

            <!-- Changes to Terms -->
            <div class="terms-section">
                <h2 class="section-title">10. Changes to Terms</h2>
                <div class="terms-text">
                    <p>EarnHive reserves the right, at its sole discretion, to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days' notice prior to any new terms taking effect.</p>
                    
                    <p>By continuing to access or use our Platform after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Platform.</p>
                </div>
            </div>

            <!-- Acceptance Section -->
            <div class="acceptance-section">
                <h2 class="acceptance-title">Acceptance of Terms</h2>
                <p class="acceptance-text">By creating an account and using the EarnHive Platform, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. You also acknowledge that you have read and understood our Privacy Policy.</p>
                <a href="{{ url()->previous() }}" class="cta-button">I Accept & Continue to EarnHive</a>
            </div>

          
        </div>
    </section>
</section>
    </section>
@endsection