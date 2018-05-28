# Minesweeper

> Only supports magento 2.3-alpha or 2.3-develop from github

This is a practice module to demostrate Magento 2 DB (for data persitance) and Repositories(for REST connection) capabilities.

## Module structure

An helper class will be used to generate board and place mines and numbers.
To keep game information it will have an table called minesweeper_game with columns:

 | game_id | board | playing_board | save
 | :---: | :--: | :--: | :--: |
  

## Installation
Manually (By now): Being in magento ROOT folder execute
```
git clone app/code/JDavidVR/Minesweeper
php bin/magento module:enable JDavidVR_Minesweeper
php bin/magento setup:upgrade --keep-generated
```

> Composer (Will be added in future)

## TODOs
### Helper
- Generate Board.
- Place Mines in random position.
- Place Number arround mines.

### Database
- Create table minesweeper (Will be created using m2.3 Declarative Schema).
- Create model for minesweeper.
- Create API interface.
- Create Implementation classes for API interface.
- Create webapi.xml to define REST endpoints.

## Future Plans
- Create board using KnockoutJS