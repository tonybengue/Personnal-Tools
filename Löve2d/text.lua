function debug()
  --DEBUG, a appeller dans le draw
  local sDebug = "Debug :"
  sDebug = sDebug.." angle ="..tostring(Lander.angle)
  sDebug = sDebug.." vx ="..tostring(Lander.vx) 
  sDebug = sDebug.." vy ="..tostring(Lander.vy) 
  love.graphics.print(sDebug, 0, 0)
end
