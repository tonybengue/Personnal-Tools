local debugFunctions = {}

-- déclarer booleens de la grille isOn
-- déclarer debugGrid.key dans le love.keypressed avec la grille et n'importe qu'elle clée passée
-- déclarer debugGrid.drawDebug(grid) dans le dessin de la grille

function debugFunctions.grid()
  local debugGrid = {}

  function debugGrid.key(pMap, pKey) 
    -- ctrl switche vrai ou faux si activé ou pas
    if pKey == "lctrl" and pMap.isOn ~= true then 
      pMap.isOn = true 
    elseif pKey == "lctrl" and pMap.isOn == true then
      pMap.isOn = false
    end

    return pKey
  end

  function debugGrid.drawGridId(pMap, pId, pX, pY)
    -- shit active/desactive si pressé
    if love.keyboard.isDown("lshift") then
      -- chiffres
      love.graphics.setColor(1, 0, 0)
      love.graphics.print(pId, pX, pY)
      love.graphics.setColor(1, 1, 1)
    end

    -- dessine si on
    if pMap.isOn then
      -- chiffres
      love.graphics.setColor(1, 0, 0)
      love.graphics.print(pId, pX, pY)
      love.graphics.setColor(1, 1, 1)
    end 
  end
  
  -- Id courant de la souris
  function debugGrid.drawMouseId(pMap)
    -- affichage données sur la carte 
    local x = love.mouse.getX()
    local y = love.mouse.getY()
    local col = math.floor(x / TILE_WIDTH) + 1
    local lig = math.floor(y / TILE_HEIGHT) + 1

-- affichage données sous la pos de la souris
    if col > 0 and col <= MAP_WIDTH and lig > 0 and lig <= MAP_HEIGH then
      id = pMap[lig][col] 
      love.graphics.print("Id :"..tostring(id),1 ,1)
    else
      love.graphics.print("hors du tableau")
    end      
  end

  return debugGrid
end

return debugFunctions


