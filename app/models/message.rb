class Message < ActiveRecord::Base
  belongs_to :poster, :through => :user
  belongs_to :replier, :through => :user
end
