class Message < ActiveRecord::Base
  belongs_to :poster, :class_name => 'User', :foreign_key => 'poster_id'
  belongs_to :replier, :class_name => 'User', :foreign_key => 'replier_id'
end
