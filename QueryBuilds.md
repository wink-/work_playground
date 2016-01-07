SELECT `RecordName`, MAX(`Date`), `Value4` FROM `analysis` WHERE `RecordName` LIKE 'EN_' AND `Value4` GROUP BY `RecordName`

select `RecordName`, `FormName`, MAX(`Date`) AS `Date`, `Value4` from `analysis` where `RecordName` like 'EN_' and `Value4` > '0' group by `RecordName`