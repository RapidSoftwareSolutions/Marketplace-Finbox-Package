[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Finbox/functions?utm_source=RapidAPIGitHub_FinboxFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Finbox Package
finbox.io is the best toolbox for researching stocks. We help you get answers fast, with unique data points and insights grounded in numbers.
* Domain: [Finbox](http://finbox.io/)
* Credentials: apiKey

## How to get credentials: 
0. Browse to [Finbox](https://finbox.io/)
1. Register or log in
2. Go to [API Access page](https://finbox.io/profile/api) to get your apiKey



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Finbox.listAvailableMetrics
Returns a list of available metrics with associated metadata

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key

## Finbox.listLatestFairValues
Returns a summary of the latest finbox.io fair value computed for a company

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| companyId| String     | Company ticker or finbox id (e.g. AAPL or FINBOX:AAPL)

## Finbox.listFairValueModels
Returns a list of all valuation models used to derive the fair value summary for a company.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| companyId| String     | Company ticker or finbox id (e.g. AAPL or FINBOX:AAPL)

## Finbox.getSingleDataForMetric
Resolve a range of datapoints for a single company metric.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| companyId| String     | Company ticker or finbox id (e.g. AAPL or FINBOX:AAPL)
| metric   | String     | finbox.io metric id (e.g. total_revenue)
| period   | String     | Period to get data for, e.g. FQ-7:FQ

## Finbox.getBatchDataForMetric
Batch requests allow you to resolve up to 100 FinQL keys in a single API call. 

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| data  | JSON       | Your batch request object

## Finbox.getUsageLimits
Returns your current API usage and limits

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key

