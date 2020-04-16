# [JSON] Corona-19-API
![preview](https://user-images.githubusercontent.com/22024308/79011806-d1e9d300-7b9f-11ea-87bb-3be5126c2394.JPG)

It provides API service related to coronavirus infection-19.
-Open 24 hours (Uptime: https://status.corona-19.kr)
-No limit to the number of API calls
-Use of official materials (ncov.mohw.go.kr)

If you want to use Corona-19-API, check out the README.md document.
To check the Corona-19-API update log, check the update_log.md5 document.

## 👨‍💻 Table of Contents
-[Issue service key] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-0-%EC%84%9C%EB%B9%84%EC%8A % A4% ED% 82% A4-% EB% B0% 9C% EA% B8% 89)
-[Domestic information] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-%EA%B5%AD%EB%82%B4-%EC%A0 % 95% EB% B3% B4)
-[Domestic counter] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-1-%EA%B5%AD%EB%82%B4-%EC % B9% B4% EC% 9A% B4% ED% 84% B0)
-[Occurrence Trend by City] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-2-%EC%8B%9C%EB%8F%84% EB% B3% 84-% EB% B0% 9C% EC% 83% 9D% EB% 8F% 99% ED% 96% A5)
-[World information (in preparation)] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EC%A0%84%EC%84%B8%EA%B3 % 84-% EC% A0% 95% EB% B3% B4% EC% A4% 80% EB% B9% 84% EC% A4% 91)
-[Goodbye Corona Corona-19-API Terms of Use] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B5%BF%EB%B0%94 % EC% 9D% B4% EC% BD% 94% EB% A1% 9C% EB% 82% 98-corona-19-api-% EC% 9D% B4% EC% 9A% A9% EC% 95% BD% EA% B4% 80)
-[Goodbye Corona Corona-19-API Privacy Policy] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B5%BF%EB%B0 % 94% EC% 9D% B4% EC% BD% 94% EB% A1% 9C% EB% 82% 98-corona-19-api-% EA% B0% 9C% EC% 9D% B8% EC% A0% 95% EB% B3% B4% EC% B2% 98% EB% A6% AC% EB% B0% A9% EC% B9% A8)
## 🔐 0. Service key issuance
### 1. Key issuance
-Visit https://api.corona-19.kr/, enter your email address and purpose of use, and click the "Issue API Key" button.
-API key will be sent to you by clicking the button.

### 2. Sample Key
-fff098a39e0a841ab72e1d27bdee9b517 [Expiration date: April 15]

## ✔ 1. Domestic information
 ### 📙 1-1. Domestic counter
  -Information provided: number of confirmed patients in Korea, number of patients cured in Korea, number of deaths in Korea, number of people in quarantine, status of confirmed patients Top 1-5 trial name and percentage rate, cumulative number of tests, cumulative number of tests completed, cumulative rate of diagnosis, under test / result Positive / Result negative counter and percentage
 -Information source: http://ncov.mohw.go.kr/
 
`` `html
http://api.corona-19.kr/korea/?serviceKey=APIKey
`` `
#### ※ Request variable [GET]
| parameter | item description | request example |
| --- | --- |-|
| serviceKey | API authentication key | http: //api.corona-19.kr/korea/? serviceKey = fff098a39e0a841ab72e1d27bdee9b517 |

#### ※ Contents of response
| Item name (English) | Item name (Korean) | Remarks | Sample data |
| --- | --- |-|-|
| resultCode | response code | normal (0) / unauthorized or invalid key (401) | 0 |
| TotalCase | Domestic Confirmed Number |-| 10,237 |
| TotalRecovered | Domestic complete recovery |-| 6,463 |
| TotalDeath | Domestic deaths |-| 183 |
| NowCase | Domestic quarantine |-| 3,591 |
| city1n | Status of confirmed patients by city 1 (name) | Name of the trial with the number of patients with the highest number of confirmed patients by city | Daegu |
| city2n | Status of confirmed patients by city 2 (name) | Name of the trial with the second largest number of confirmed patients by city | Gyeongbuk |
| city3n | Status of confirmed patients by city 3 (name) | Name of the trial with the third largest number of confirmed patients by city | Other |
| city4n | Status of confirmed patients by city 4 (name) | Name of the trial with the fourth largest number of confirmed patients by city | Match |
| city5n | Status of confirmed patients by city 5 (name) | Name of the trial with the 5th largest number of confirmed patients by city | Seoul |
| city1p | Status of confirmed patients by city 1 (percent) | Percentage of trials with the number of patients with the highest number of confirmed patients by city | 66.11 |
| city2p | Status of confirmed patients by city 2 (percent) | Percentage of trials with the second largest number of confirmed patients by city | 12.84 |
| city3p | Status of confirmed patients by city 3 (percent) | Percentage of trials with the third largest number of confirmed patients by city | 10.07 |
| city4p | Status of confirmed patients by city 4 (percent) | Percentage of trials with the fourth largest number of confirmed patients by city | 5.59 |
| city5p | Status of confirmed patients by city 5 (percent) | Percentage of trials with the fifth largest number of confirmed patients by city | 5.39 |
| recoveredPercentage | Domestic cure rate | Unit: Percent | 63.13 |
| deathPercentage | Domestic Mortality | Unit: Percent | 1.79 |
| checkingCounter | Domestic inspection | Unit: persons | 19,571 |
| checkingPercentage | Domestic Inspection | Unit: Percent | 4.2 |
| caseCounter | Domestic test results positive | Unit: persons | 10,237 |
| casePercentage | Position of domestic test results | Unit: Percent | 2.2 |
| notcaseCount | Domestic test result negative | Unit: persons | 431,425 |
| notcasePercentage | Domestic test result negative | Unit: Percent | 93.5 |
| TotalChecking | Total number of inspection completed | Unit: Person | 461,233 |
| TodayRecovered | Today's cure per day | Unit: Person | 135 |
| updateTime | Information update criteria | It is automatically updated around 10:00 am with 00 hour information. | Coronavirus infection-19 Domestic outbreak status (as of 4.5.00) |
| resultMessage | API processing result | Normal processing: (Normal processing.) / Error (authorized or invalid key. Please visit \ "github.com \ / dhlife09 \ / Corona-19-API \") | Normal Has been processed. |

※ JSON Sample Response (Full Message)
-[https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED% 84% B0_% EC% 9D% 91% EB% 8B% B5% EC% 83% 98% ED% 94% 8C.json] (https://github.com/dhlife09/Corona-19-API/blob/master / 1_% EA% B5% AD% EB% 82% B4% EC% B9% B4% EC% 9A% B4% ED% 84% B0_% EC% 9D% 91% EB% 8B% B5% EC% 83% 98 % ED% 94% 8C.json)

 
---

 ### 📙 1-2. Occurrence Trend by Trial
  -Information provided: Increased / decreased number of confirmed patients, number of confirmed patients, number of quarantine releases, number of deaths, incidence rate
 -Information source: http://ncov.mohw.go.kr/
 
`` `html
http://api.corona-19.kr/korea/country/?serviceKey=APIKey
`` `
※ Request variable [GET]
| parameter | item description | example |
| --- | --- |-|
| serviceKey | API authentication key | http: //api.corona-19.kr/korea/country/? serviceKey = fff098a39e0a841ab72e1d27bdee9b517 |

#### ※ rule
data {num1} _ {num2}
 -num1: region code 0 (total) to 18 (quarantine)
 -num2: 0 (area name (item name)), 1 (new proliferation number), 2 (definite number of patients), 3 (number of complete patients), 4 (number of deaths), 5 (incidence rate, 6 (increase / decrease-overseas inflow) ), 7 (Increase / decrease compared to the previous day-Local occurrence)

#### ※ Contents of response
| Item name (English) | Item name (Korean) | Remarks | Sample data |
| --- | --- |-|-|
| resultCode | response code | normal (0) / unauthorized or invalid key (401) | 0 |
| data0_0 | Region name (item name) | Rule check ([https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B7%9C%EC%B9%99 ] (https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B7%9C%EC%B9%99)) | Total |
| data0_1 | New promulgation | Rule scholar | 47 |
| data0_2 | Number of confirmed patients | Rule check | 10284 |
| data0_3 | Number of complete cure | Check rules | 6598 |
| data0_4 | Number of deaths | Checking rules | 186 |
| data0_5 | Incidence | Rule Check | 19.84 |
| data0_6 | Increase / decrease from the previous day-Overseas inflow | Rule check | 5 |
| data0_7 | Increase / decrease compared to the previous day-Regional occurrence | Rule check | 22 |
| data1_0 | Region name (item name) | Rule check | Seoul |
| data1_1 | New promulgation | Rule check | 11 |
| data1_2 | Number of confirmed patients | Rule check | 563 |
| data1_3 | Number of complete cure | Check rules | 151 |
| data1_4 | Number of deaths | Rule check | 0 |
| data1_5 | incidence | rule check | 5.78 |
| data1_6 | Increase / decrease from the previous day-Overseas inflow | Rule check | 0 |
| data1_7 | Increase / decrease compared to the previous day-Regional occurrence | Rule check | 5 |
| Rule omitted | Rule omitted | Please check the rules at the top. The configuration is the same from 0 to 18. | Rule omitted |
| data18_3 | Number of complete cure | Check rules | 2 |
| data18_4 | Number of deaths | Rule check | 0 |
| data18_5 | Incidence | Rule Check |-|
| data18_6 | Increase / decrease over the previous day-Overseas inflow | Rule check | 4 |
| data18_7 | Increase / decrease compared to the previous day-Local occurrence | Check rules | 0 |
| resultMessage | normal handling: (normally processed) / error (authorized or invalid key. Please visit \ "github.com \ / dhlife09 \ / Corona-19-API \") | normally processed. |

※ JSON Sample Response (Full Message)
-[https://github.com/dhlife09/Corona-19-API/blob/master/2_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC% 83% 9D% EB% 8F% 99% ED% 96% A5_% EC% 9D% 91% EB% 8B% B5% EC% 83% 98% ED% 94% 8C.json] (https://github.com / dhlife09 / Corona-19-API / blob / master / 2_% EC% 8B% 9C% EB% 8F% 84% EB% B3% 84_% EB% B0% 9C% EC% 83% 9D% EB% 8F% 99 % ED% 96% A5_% EC% 9D% 91% EB% 8B% B5% EC% 83% 98% ED% 94% 8C.json)


## ❌ Worldwide information (in preparation)
### ❌ 1. Counters Worldwide
-Information provided: number of confirmed patients worldwide, number of people cured worldwide, number of deaths worldwide, number of patients worldwide
-Information Source: https://www.worldometers.info/coronavirus/index.php


## 바이 Goodbye Corona Corona-19-API Terms of Use
-Anyone can use the API related to Corona 19 provided by Goodbye Corona free of charge.
-The use of API in illegal services is prohibited.
-It is prohibited to load the service.
-It is forbidden to issue API key using abnormal email address such as one-time email.
-Important notices, such as service, may be sent to the email address where the key was received.

## 바이 Goodbye Corona Corona-19-API Privacy Policy
<Goodbye Corona> ('https://api.corona-19.kr' or 'Corona-19-API') _ protects the privacy and interests of users and protects personal information The following treatment policies are in place to facilitate the handling of related users' grievances.

<Goodbye Corona> ('Corona-19-API') _ will notify the Company through the notice on the website (or individual notice) when revising the privacy policy.

○ This policy is effective from April 1, 2020.

**(One). Purpose of Processing Personal Information ** <Goodbye Corona> ('https://api.corona-19.kr' or 'Corona-19-API') _ handles personal information for the following purposes. The processed personal information will not be used for any purpose other than the following, and prior consent will be sought when the purpose of use is changed.

end. Homepage membership registration and management
We process personal information for the purpose of confirming the intention to register as a member and preventing illegal use of the service.

I. Complaint handling
Personal information is processed for the purpose of notification of processing results.

**(2). Personal information file status **
1. Personal Information File Name: Goodbye Corona Corona-19-API Personal Information
-Personal information items: email, access IP information
-Collection method: Homepage
-Evidence of possession: stable service operation, prevention of illegal use
-Retention period: Until the end of service

** 3. Period of processing and retention of personal information **
  
① <Goodbye Corona> ('Corona-19-API') is the retention and use period of personal information in accordance with laws and regulations, or personal information that is agreed upon when collecting personal information from an information subject. Processing, possession.
  
② Each personal information processing and retention period is as follows.

1. <Process of civil affairs>
Personal information related to <process of civil affairs> is retained and used for the above purposes from the date of consent for collection and use to <service termination>.
-Based on: stable service operation, prevention of illegal use
  

**4. Rights and obligations of the data subject and legal representatives and how to exercise them As a personal information subject, users can exercise the following rights. **

① The information subject can exercise the right to view, correct, delete, or stop processing personal information at any time for Goodbye Corona.
② The exercise of rights pursuant to Paragraph 1 may be made via e-mail in accordance with Article 41 (1) of the Enforcement Decree of the Personal Information Protection Act, and Goodbye Corona will take action without delay.
③ The exercise of rights pursuant to paragraph 1 may be done through a legal representative of the data subject or an agent such as a person who has been delegated. In this case, you must submit a power of attorney in accordance with Appendix 11 of the Enforcement Rules of the Personal Information Protection Act.
④ Requests for access to personal information and suspension of processing may be restricted in accordance with Article 35 (5) and Article 37 (2) of the Personal Information Protection Act.
⑤ Requests for correction and deletion of personal information cannot be requested if the personal information is specified as a collection target in other laws and regulations.
⑥ Goodbye Corona confirms whether the person who made the request, such as a request for access, request for correction or deletion, or a request for suspension of processing according to the rights of the data subject, is the person or a legitimate agent.

** 5. Create items of personal information to be processed **
  
① <Goodbye Corona> ('https://api.corona-19.kr' or 'Corona-19-API') _ handles the following personal information items.

1. <Processing civil complaints>
-Required items: Email, access IP information

** 6. Destruction of personal information <Goodbye Corona> ('Corona-19-API') _, in principle, destroys personal information without delay when the purpose of processing personal information is achieved. The procedure, deadline and method of destruction are as follows. **

-Destruction procedure
The information entered by the user is transferred to a separate DB after achieving the purpose (separate documents in the case of paper) and stored for a certain period of time according to the internal policy and other related laws or immediately destroyed. At this time, personal information transferred to the DB will not be used for any other purpose unless required by law.
  
-Destruction time
When the retention period of the personal information has elapsed, the user's personal information is provided within 5 days from the end date of the retention period, when the personal information becomes unnecessary, such as the achievement of the purpose of processing personal information, the abolition of the service, and the termination of the business. We destroy the personal information within 5 days from the date when it is deemed unnecessary.

-How to destroy
Information in the form of electronic files uses a technical method that cannot reproduce the records.

  
  

** 7. Matters concerning the installation, operation and rejection of automatic personal information collection devices **

Goodbye-Corona does not use ‘cookies’ that store the information subject's usage information and call it from time to time.
  

**8. Personal information protection officer **

  
① Goodbye Corona ('https://api.corona-19.kr' or 'Corona-19-API') is responsible for the handling of personal information, and complaints from data subjects related to personal information processing For the purpose of handling and remedy, the person in charge of personal information protection is designated as follows.

  
▶ Personal information protection officer
Name: Dohyun Park
Position: Operator
Position: Operator
Contact: dhlife09@gmail.com
※ It leads to the department in charge of personal information protection.
  
② The information subject inquiries, complaints and damage relief related to all personal information protection occurred while using the service (or business) of Goodbye Corona ('https://api.corona-19.kr' or 'Corona-19-API') You can inquire about matters such as personal information protection officer. Goodbye Corona (“https://api.corona-19.kr” or “Corona-19-API”) will respond and process information inquiries without delay.

** 9. Privacy Policy Change **

① This personal information processing policy is applied from the effective date, and if there are any additions, deletions, and corrections of changes in accordance with laws and policies, the notice will be notified through 7 days prior to the implementation of the changes.

** 10. Measures to ensure the safety of personal information <Goodbye Corona> ('Corona-19-API') takes the technical, administrative, and physical measures necessary to secure safety in accordance with Article 29 of the Personal Information Protection Act. **

1. Storage of access records and prevention of forgery
We keep and manage records that have been connected to the personal information processing system for at least 6 months, and use security functions to prevent access records from being forged, stolen, or lost.
  
2. Restrict access to personal information
We take necessary measures to control access to personal information through granting, changing, and canceling access rights to the database system that processes personal information, and control unauthorized access from the outside using an intrusion prevention system.
