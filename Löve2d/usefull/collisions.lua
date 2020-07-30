-- Random
math.randomseed(love.timer:getTime())

-- Collision beetween 2 tables
function collideTables(a1, a2)
  if (a1 == a2) then return false end
  local dX = a1.x - a2.x
  local dY = a1.y - a2.y
  
  if(math.abs(dX) < a1.img:getWidth() + a2.img:getWidth()) then
    if(math.abs(dY) < a1.img:getHeight() + a2.img:getHeight()) then
      return true
    end
  end
  
  return false
end

-- AABB Colision
function collidePoints(ax1, ay1, aw, ah, bx1, by1, bw, bh)
  local ax2, ay2, bx2, by2 = ax1 + aw, ay1 + ah, bx1 + bw, by1 + bh
  
  return ax1 < bx2 and 
         ax2 > bx1 and 
         ay1 < by2 and 
         ay2 > by1
end

-- Collision simple AABB
function CheckCollision(x1,y1,w1,h1,x2,y2,w2,h2)
  return x1 < x2+w2 and
         x2 < x1+w1 and
         y1 < y2+h2 and
         y2 < y1+h1
end