function initGrid(brickWidth, brickHeight, nbLines)
  grid.brick = {}
  grid.brick.width = brickWidth
  grid.brick.height = brickHeight
  grid.nbLines = nbLines
  grid.nbColumns = SCREEN_WIDTH / grid.brick.width

  -- Création de la grille
  local line, column
  for line = 1, grid.nbLines do
    grid[line] = {} 
    for column = 1, grid.nbColumns do
      grid[line][column] = 1 
    end
  end
end

function drawGrid()
  local line, column 
  local offsetGridX, offsetGridY = 0, 0 -- offset

  -- Dessinne les briques
  for line = 1, grid.nbLines do
    offsetGridX = 0 -- reset curseur
    for column = 1, grid.nbColumns do
      if grid[line][column] == 1 then 
        love.graphics.rectangle("fill", offsetGridX , offsetGridY, grid.brick.width - 2, grid.brick.height - 2 )
      end

      offsetGridX = offsetGridX + grid.brick.width
    end
    offsetGridY = offsetGridY + grid.brick.height
  end
end
