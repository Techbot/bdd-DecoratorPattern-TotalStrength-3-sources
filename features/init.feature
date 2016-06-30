Feature: Strength creation
  in order to play game
  As a player
  I need to calculate my strength

  Rules :
  - Player has three strength sources player strength, weapon strength and faction strength

  Scenario: Player gets strength at beginning of game
    Given  I have a playerStrength of '6'
    And a weaponStrength of '4'
    And a factionStrength of '1'
    When I begin a game
    Then I should have a totalStrength of '11'


