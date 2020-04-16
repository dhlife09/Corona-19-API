
# [JSON] Corona-19-API
![preview](https://user-images.githubusercontent.com/22024308/79011806-d1e9d300-7b9f-11ea-87bb-3be5126c2394.JPG)

It provides API service related to coronavirus infection-19.
- Open 24 hours (Uptime: https://status.corona-19.kr)
- No limit to the number of API calls
- Use official informations (ncov.mohw.go.kr)

If you want to use Corona-19-API, check out the README_ENG.md document.
To check the Corona-19-API update log, check the update_log.md5 document.

## 👨‍💻 Table of Contents
- [Service Key](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-0-service-key-issuance)
- [Korea Information]([https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-1-domestic-information](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-1-domestic-information))
	- [Korea Main Counter](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-1-domestic-information)
	- [Korea Country Informations](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-1-domestic-information)
- [World Information(in preparation)](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#-worldwide-information-in-preparation)
-[Goodbye-Corona Corona-19-API Terms of Use](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#%EB%B0%94%EC%9D%B4-goodbye-corona-corona-19-api-terms-of-use)
-[Goodbye-Corona Corona-19-API Privacy Policy](https://github.com/dhlife09/Corona-19-API/blob/master/ENG_README.md#%EB%B0%94%EC%9D%B4-goodbye-corona-corona-19-api-privacy-policy)

## 🔐 0. Service key issuance
### 1. Key issuance
-Visit https://api.corona-19.kr/, enter your email address and purpose of use, and click the "Issue API Key" button.
-API key will be sent to you by clicking the button.

## ✔ 1. Korea Information
 ### 📙 1-1. Korea Main Counter
  - Provided informations: number of confirmed patients in Korea, number of patients cured in Korea, number of deaths in Korea, number of people in quarantine, status of confirmed patients Top 1-5 trial name and percentage rate, cumulative number of tests, cumulative number of tests completed, cumulative rate of diagnosis, under test / result Positive / Result negative counter and percentage
 - Information source: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/?serviceKey=APIKey
```

#### ※ Request variable [GET]
| parameter | item description | request example |
| --- | --- |-|
| serviceKey | API authentication key | http://api.corona-19.kr/korea/? serviceKey=fff098a39e0a841ab72e1d27bdee9b517 |

#### ※ Contents of response
| Item name (English) | Item description | Remarks | Sample data |
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

 ### 📙 1-2. Korea Country Informations
  - Provided informations: Increased / decreased number of confirmed patients, number of confirmed patients, number of quarantine releases, number of deaths, incidence rate
 - Information source: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/country/?serviceKey=APIKey
```

※ Request variable [GET]
| parameter | item description | example |
| --- | --- |-|
| serviceKey | API authentication key | http://api.corona-19.kr/korea/country/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517 |

#### ※ rule
data {num1} _ {num2}
 -num1: region code 0 (total) to 18 (quarantine)
 -num2: 0 (area name (item name)), 1 (new proliferation number), 2 (definite number of patients), 3 (number of complete patients), 4 (number of deaths), 5 (incidence rate, 6 (increase / decrease-overseas inflow) ), 7 (Increase / decrease compared to the previous day-Local occurrence)

#### ※ Contents of response
| Item name (English) | Item description | Remarks | Sample data |
| --- | --- |-|-|
| resultCode | response code | normal (0) / unauthorized or invalid key (401) | 0 |
| data0_0 | Region name (item name) | Check rules | Total |
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


## Goodbye Corona Corona-19-API Terms of Use
- Anyone can use the API related to Corona 19 provided by Goodbye Corona free of charge.
- The use of API in illegal services is prohibited.
- It is prohibited to load the service.
- It is forbidden to issue API key using abnormal email address such as one-time email.
- Important notices, such as service, may be sent to the email address where the key was received.

## Goodbye Corona Corona-19-API Privacy Policy
 - English version is not supported.
