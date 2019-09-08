
-- Move an object by an angle
function obj:moveFromAngle(pAngle, pSpeed, pVelocityX, pVelocityY, dt)
  -- Angle en radian * vitesse objet (angleRadian en cosinus et sinus * vitesse)
  local forceX = math.cos(pAngle) * (pSpeed * dt)
  local forceY = math.sin(pAngle) * (pSpeed * dt)

  -- applique la force à la vélocité
  self.velocityX = pVelocityX + forceX  
  self.velocityY = pVelocityY + forceY
end

-- Return the angle beetween 2 points
function math.angle(x1,y1, x2,y2) return math.atan2(y2-y1, x2-x1) end

-- Reset the angle for left and right
function obj:resetAngles(pLeft, pRight, pAngle, pAngleMin, pAngleMax, pAngleRotationSpeed, dt) 
  if pLeft then
    if self.angle < self.angleMin then self.angle = self.angleMax end
    self.angle = self.angle - self.angleRotationSpeed * dt
  end 

  if pRight then
    if self.angle > self.angleMax then self.angle = self.angleMin end
    self.angle = self.angle + self.angleRotationSpeed * dt
  end
end